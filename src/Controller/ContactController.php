
<?php
namespace App\Controller;

use App\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

class ContactController extends AbstractController
{
    #[Route('/contact', name: 'contact')]
    public function index(Request $request, MailerInterface $mailer): Response
    {
        $form = $this->createForm(ContactType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $type = $data['vousEtes'];

            if ($type === 'demandeur') {
                return $this->redirect('https://www.francetravail.fr/faq/candidat.html');
            }
            if ($type === 'recruteur') {
                return $this->redirect('https://www.francetravail.fr/faq/employeur.html');
            }

            if (($type === 'journaliste' && empty($data['media'])) ||
                (($type === 'societe' || $type === 'partenaire') && empty($data['nomSociete']))) {
                $this->addFlash('error', 'Merci de remplir les champs conditionnels requis.');
            } else {
                $destinataires = [
                    'societe' => 'reseauxsociauxpoleemploi.00617@francetravail.fr',
                    'partenaire' => 'reseauxsociauxpoleemploi.00617@francetravail.fr',
                    'journaliste' => 'dccompresse.00143@francetravail.fr',
                ];
                $subjects = [
                    'societe' => "[Contact] Message d'une Société ou Institution",
                    'partenaire' => "[Contact] Message d'un Partenaire",
                    'journaliste' => "[Contact] Message d'un Journaliste",
                ];
                $destinataire = $destinataires[$type] ?? null;
                $subject = $subjects[$type] ?? '[Contact] Nouveau message';

                if ($destinataire) {
                    $email = (new Email())
                        ->from('formulaire-francetravail@onmycloud365.com')
                        ->sender('formulaire-francetravail@onmycloud365.com')
                        ->replyTo($data['email'])
                        ->to($destinataire)
                        ->subject($subject)
                        ->addHeader('From', '"Formulaire contact France Travail" <formulaire-francetravail@onmycloud365.com>')
                        ->html($this->renderView('contact/email_template.html.twig', ['data' => $data]));
                    $mailer->send($email);
                    $this->addFlash('success', 'Votre message a bien été envoyé.');
                } else {
                    $this->addFlash('error', 'Une erreur est survenue lors de l\'envoi.');
                }
                return $this->redirectToRoute('contact');
            }
        }

        return $this->render('contact/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }
}
