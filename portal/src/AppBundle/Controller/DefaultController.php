<?php

namespace AppBundle\Controller;

use AppBundle\Entity\User;
use Doctrine\DBAL\Types\IntegerType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\Security\Core\User\UserInterface;

use AppBundle\Entity\DForm;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Security\Core\Encoder\BasePasswordEncoder;
use Symfony\Component\Form\FormBuilderInterface;


class DefaultController extends Controller
{

    public function indexAction(Request $request)
    {
        $user = $this->getUser()->getId();

        $initials_db = $this->getDoctrine()->getRepository('AppBundle:User');

        $initials_arrey = $initials_db->createQueryBuilder('t')
            ->select('t.firstname, t.lastname')
            ->where('t.id=:id')
            ->setParameter('id', $user)
            ->getQuery();


        $initials = $initials_arrey->getResult();

        $name = $initials['0']['firstname'];

        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', array(
            'names' => $name
        ));
    }



    public function dformAction(Request $request)
    {
        $user = $this->getUser()->getId();

        $dform = new DForm();

        $initials_db = $this->getDoctrine()->getRepository('AppBundle:User');

        $initials_arrey = $initials_db->createQueryBuilder('t')
            ->select('t.firstname, t.lastname, t.email')
            ->where('t.id=:id')
            ->setParameter('id', $user)
            ->getQuery();


        $initials = $initials_arrey->getResult();

        $firstname = $initials['0']['firstname'];
        $lastname = $initials['0']['lastname'];
        $email = $initials['0']['email'];

        $form = $this->createFormBuilder($dform)
            ->add('title', TextType::class)
            ->add('firstName', TextType::class, ['data' => $firstname])
            ->add('lastName', TextType::class, ['data' => $lastname])
            ->add('initialDate', TextType::class)
            ->add('initialTime', TextType::class)
            ->add('endingDate', TextType::class)
            ->add('endingTime', TextType::class)
            ->add('firstName1', TextType::class, array('required' => false))
            ->add('lastName1', TextType::class, array('required' => false))
            ->add('firstName2', TextType::class, array('required' => false))
            ->add('lastName2', TextType::class, array('required' => false))
            ->add('firstName3', TextType::class, array('required' => false))
            ->add('lastName3', TextType::class, array('required' => false))
            ->add('firstName4', TextType::class, array('required' => false))
            ->add('lastName4', TextType::class, array('required' => false))
            ->add('firstName5', TextType::class, array('required' => false))
            ->add('lastName5', TextType::class, array('required' => false))
            ->add('firstName6', TextType::class, array('required' => false))
            ->add('lastName6', TextType::class, array('required' => false))
            ->add('firstName7', TextType::class, array('required' => false))
            ->add('lastName7', TextType::class, array('required' => false))
            ->add('firstName8', TextType::class, array('required' => false))
            ->add('lastName8', TextType::class, array('required' => false))
            ->add('firstName9', TextType::class, array('required' => false))
            ->add('lastName9', TextType::class, array('required' => false))
            ->add('firstName10', TextType::class, array('required' => false))
            ->add('lastName10', TextType::class, array('required' => false))
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $tt = $form['title']->getData();
            $fn = $form['firstName']->getData();
            $ln = $form['lastName']->getData();
            $fn1 = $form['firstName1']->getData();
            $ln1 = $form['lastName1']->getData();
            $fn2 = $form['firstName2']->getData();
            $ln2 = $form['lastName2']->getData();
            $fn3 = $form['firstName3']->getData();
            $ln3 = $form['lastName3']->getData();
            $fn4 = $form['firstName4']->getData();
            $ln4 = $form['lastName4']->getData();
            $fn5 = $form['firstName5']->getData();
            $ln5 = $form['lastName5']->getData();
            $fn6 = $form['firstName6']->getData();
            $ln6 = $form['lastName6']->getData();
            $fn7 = $form['firstName7']->getData();
            $ln7 = $form['lastName7']->getData();
            $fn8 = $form['firstName8']->getData();
            $ln8 = $form['lastName8']->getData();
            $fn9 = $form['firstName9']->getData();
            $ln9 = $form['lastName9']->getData();
            $fn10 = $form['firstName10']->getData();
            $ln10 = $form['lastName10']->getData();
            $idate = $form['initialDate']->getData();
            $itime = $form['initialTime']->getData();
            $edate = $form['endingDate']->getData();
            $etime = $form['endingTime']->getData();


            if ($edate == $idate) {
                $edate = '';
            }

            $pattern = '/(\d{2}).(\d{2}).(\d{4})/';
            $replacement = '$3-$2-$1';
            $newidate = preg_replace($pattern, $replacement, $idate);

            if ($edate != '') {
                $newidate2 = preg_replace($pattern, $replacement, $edate);
            } else {
                $newidate2 = '';
            }

            $dform->setTitle($tt);
            $dform->setFirstName($fn);
            $dform->setLastName($ln);
            $dform->setFirstName1($fn1);
            $dform->setLastName1($ln1);
            $dform->setFirstName2($fn2);
            $dform->setLastName2($ln2);
            $dform->setFirstName3($fn3);
            $dform->setLastName3($ln3);
            $dform->setFirstName4($fn4);
            $dform->setLastName4($ln4);
            $dform->setFirstName5($fn5);
            $dform->setLastName5($ln5);
            $dform->setFirstName6($fn6);
            $dform->setLastName6($ln6);
            $dform->setFirstName7($fn7);
            $dform->setLastName7($ln7);
            $dform->setFirstName8($fn8);
            $dform->setLastName8($ln8);
            $dform->setFirstName9($fn9);
            $dform->setLastName9($ln9);
            $dform->setFirstName10($fn10);
            $dform->setLastName10($ln10);
            $dform->setInitialDate($newidate);
            $dform->setInitialTime($itime);
            $dform->setEndingDate($newidate2);
            $dform->setEndingTime($etime);

            $em = $this->getDoctrine()->getManager();

            // tells Doctrine you want to (eventually) save the Product (no queries yet)
            $em->persist($dform);

            $dform->setUserId($user);

            // actually executes the queries (i.e. the INSERT query)
            $em->flush();
        }



        $posts = $this->getDoctrine()->getRepository('AppBundle:DForm');

        $query = $posts->createQueryBuilder('t')
            ->select('t.title, t.firstName, t.lastName, t.initialDate')
            ->where('t.userId=:user')
            ->setParameter('user', $user)
            ->orderBy( 'DATE_DIFF( t.initialDate, CURRENT_DATE())' , 'ASC')
            ->getQuery();


        $posts = $query->getResult();

        for ($i = 0; $i < count($posts); $i++) {

            $date = $posts[$i]['initialDate'];
            $pattern = '/(\d{4})-(\d{2})-(\d{2})/';
            $replacement = '$3.$2.$1';
            $posts[$i]['initialDate'] = preg_replace($pattern, $replacement, $date);
        }

        if($form->isSubmitted() && $form->isValid())
        {
            $data = $form->getData();

            $message = \Swift_Message::newInstance()
                ->setSubject('Anmeldung Dienstfahrt')
                // ->setBcc(array('vm@picard.de', $email))
                ->setBcc(array('zeiterfassung@picard.de', 'vm@picard.de', $email))
                ->setFrom($email)
                ->setBody(
                    $this->renderView(
                    // app/Resources/views/Emails/registration.html.twig
                        'Emails/registration.html.twig',
                        array('send' => $data, 'email' => $email)
                    ),
                    'text/html'
                )
            ;

            $this->get('mailer')->send($message);

            return $this->redirect($this->generateUrl('history'));
        }

        return $this->render('dform/index.html.twig', array(
            'form' => $form->createView(),
            'posts' => $posts
        ));
    }



    public function historyAction(Request $request)
    {
        $user = $this->getUser()->getId();

        $initials_db = $this->getDoctrine()->getRepository('AppBundle:User');

        $initials_arrey = $initials_db->createQueryBuilder('t')
            ->select('t.email')
            ->where('t.id=:id')
            ->setParameter('id', $user)
            ->getQuery();


        $initials = $initials_arrey->getResult();

        $email = $initials['0']['email'];



        if ($request->request->has('delete_trip')) {

            $get = $request->request->all();
            $trip_id = $get['delete_trip'];

            $data = $this->getDoctrine()->getManager();
            $posts = $this->getDoctrine()->getRepository('AppBundle:DForm');

            $query = $posts->createQueryBuilder('t')
                ->select('t.id, t.title, t.firstName, t.lastName, t.firstName1, t.lastName1, t.firstName2, t.lastName2, t.firstName3, t.lastName3, t.firstName4, t.lastName4, t.firstName5, t.lastName5, t.firstName6, t.lastName6, t.firstName7, t.lastName7, t.firstName8, t.lastName8, t.firstName9, t.lastName9, t.firstName10, t.lastName10, t.initialDate, t.initialTime, t.endingDate, t.endingTime')
                ->where('t.id=:id')
                ->setParameter('id', $trip_id)
                ->getQuery();


            $posts = $query->getResult();

            $message = \Swift_Message::newInstance()
                ->setSubject('Stornierung der Dienstfahrt')
                // ->setBcc(array('vm@picard.de', $email))
                ->setBcc(array('zeiterfassung@picard.de', 'vm@picard.de', $email))
                ->setFrom($email)
                ->setBody(
                    $this->renderView(
                    // app/Resources/views/Emails/registration.html.twig
                        'Emails/delete_trip.html.twig',
                        array(
                            'title' => $posts['0']['title'],
                            'firstName' => $posts['0']['firstName'],
                            'lastName' => $posts['0']['lastName'],
                            'firstName1' => $posts['0']['firstName1'],
                            'lastName1' => $posts['0']['lastName1'],
                            'firstName2' => $posts['0']['firstName2'],
                            'lastName2' => $posts['0']['lastName2'],
                            'firstName3' => $posts['0']['firstName3'],
                            'lastName3' => $posts['0']['lastName3'],
                            'firstName4' => $posts['0']['firstName4'],
                            'lastName4' => $posts['0']['lastName4'],
                            'firstName5' => $posts['0']['firstName5'],
                            'lastName5' => $posts['0']['lastName5'],
                            'firstName6' => $posts['0']['firstName6'],
                            'lastName6' => $posts['0']['lastName6'],
                            'firstName7' => $posts['0']['firstName7'],
                            'lastName7' => $posts['0']['lastName7'],
                            'firstName8' => $posts['0']['firstName8'],
                            'lastName8' => $posts['0']['lastName8'],
                            'firstName9' => $posts['0']['firstName9'],
                            'lastName9' => $posts['0']['lastName9'],
                            'firstName10' => $posts['0']['firstName10'],
                            'lastName10' => $posts['0']['lastName10'],
                            'initialDate' => $posts['0']['initialDate'],
                            'initialTime' => $posts['0']['initialTime'],
                            'endingDate' => $posts['0']['endingDate'],
                            'endingTime' => $posts['0']['endingTime'],
                            'email' => $email)
                    ),
                    'text/html'
                )
            ;

            $this->get('mailer')->send($message);


            $tripId = $data->getRepository('AppBundle:DForm')->find($trip_id);
            $data->remove($tripId);
            $data->flush();
        }

        $posts = $this->getDoctrine()->getRepository('AppBundle:DForm');

        $query = $posts->createQueryBuilder('t')
            ->select('t.id, t.title, t.firstName, t.lastName, t.firstName1, t.lastName1, t.firstName2, t.lastName2, t.firstName3, t.lastName3, t.firstName4, t.lastName4, t.firstName5, t.lastName5, t.firstName6, t.lastName6, t.firstName7, t.lastName7, t.firstName8, t.lastName8, t.firstName9, t.lastName9, t.firstName10, t.lastName10, t.initialDate, t.initialTime, t.endingDate, t.endingTime')
            ->where('t.userId=:user')
            ->setParameter('user', $user)
            ->orderBy( 'DATE_DIFF( t.initialDate, CURRENT_DATE())' , 'DESC')
            ->getQuery();


        $posts = $query->getResult();


        for ($i = 0; $i < count($posts); $i++) {
            $date = $posts[$i]['initialDate'];
            $date2 = $posts[$i]['endingDate'];
            $pattern = '/(\d{4})-(\d{2})-(\d{2})/';
            $replacement = '$3.$2.$1';
            $posts[$i]['initialDate'] = preg_replace($pattern, $replacement, $date);

            if ($date2 != ''){
                $posts[$i]['endingDate'] = preg_replace($pattern, $replacement, $date2);
            }
        }

        $paginator  = $this->get('knp_paginator');
        $result = $paginator->paginate(
            $posts,
            $request->query->getInt('page', 1),
            $request->query->getInt('limit', 5)
        );

        return $this->render('dform/history.html.twig', array(
            'posts' => $result,
        ));
    }

}
