<?php

namespace App\Controller\Frontend;

use App\Entity\Post;
use App\Repository\PostRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
class PostController extends Controller
{
    /**
    * @Route("/posts", name="posts")
    */
    public function index(PostRepository $repository): Response
    {
        $posts = $this->getDoctrine()
                    ->getRepository(Post::class)
                    ->findAll();
        return $this->render('posts/list.twig', array(
       'posts' => $posts,
    'pageData' => array(
        'title'     => 'Exceptional Servers Incorporated | Dedicated Server Experts',
        'generator'   => 'devCU ProCMS',
        'desc'   => 'Dedicated Server Experts',
        'keys'   => 'Ubuntu',
        'author'   => 'devCU Software',
        'fbpgid'   => 'devCU Software',
        'ogurl'   => 'https://www.exceptionalservers.com',
        'ogtype'   => 'website',
        'ogtitle'   => 'Exceptional Servers Incorporated | Dedicated Server Experts',
        'ogdesc'   => 'Dedicated Server Experts',
        'ogimg'   => 'devCU Software',
        'twcard'   => 'summary',
        'twsite'   => 'devCU Software',
        'twtitle'   => 'Exceptional Servers Incorporated | Dedicated Server Experts',
        'twdesc'   => 'Dedicated Server Experts',
        'twimg'   => 'devCU Software',
        ),
     ));
   }

    /**
    * @Route("/posts/new", name="new")
    * @Method({"GET", "POST"})
    */
    public function new(Request $request)
    {
        $post = new Post();
        $form = $this->createFormBuilder($post)
                    ->add('title', TextType::class)
                    ->add('content', TextareaType::class)
                    ->add('description', TextareaType::class)
                    ->add('excerpt', TextareaType::class)
                    ->add('create', SubmitType::class)
                    ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
                
            $em->persist($post);
            $em->flush();
            $this->addFlash('success', 'post created');
            return $this->redirectToRoute('posts');
        }
        return $this->render('posts/new.twig', array(
       'form' => $form->createView(),
    'pageData' => array(
        'title'     => 'Exceptional Servers Incorporated | Dedicated Server Experts',
        'generator'   => 'devCU ProCMS',
        'desc'   => 'Dedicated Server Experts',
        'keys'   => 'Ubuntu',
        'author'   => 'devCU Software',
        'fbpgid'   => 'devCU Software',
        'ogurl'   => 'https://www.exceptionalservers.com',
        'ogtype'   => 'website',
        'ogtitle'   => 'Exceptional Servers Incorporated | Dedicated Server Experts',
        'ogdesc'   => 'Dedicated Server Experts',
        'ogimg'   => 'devCU Software',
        'twcard'   => 'summary',
        'twsite'   => 'devCU Software',
        'twtitle'   => 'Exceptional Servers Incorporated | Dedicated Server Experts',
        'twdesc'   => 'Dedicated Server Experts',
        'twimg'   => 'devCU Software',
        ),
     ));
   }
    /**
    * @Route("/{id}/show", requirements={"id": "\d+"}, name="show")
    * @Method("GET")
    */
    public function show(Post $post): Response
    {
        return $this->render('posts/show.twig', [
            'post' => $post,
        ]);
    }
    /**
    * @Route("/{id}/edit", requirements={"id": "\d+"}, name="edit")
    * @Method({"GET", "POST"})
    */
    public function edit(Request $request, Post $post): Response
    {
        $form = $this->createFormBuilder($post)
                    ->add('title', TextType::class)
                    ->add('content', TextareaType::class)
                    ->add('excerpt', TextareaType::class)
                    ->add('edit', SubmitType::class)
                    ->getForm();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
                
            $em->flush();
            $this->addFlash('success', 'post edited');
            return $this->redirectToRoute('posts');
        }
        return $this->render('posts/edit.twig', [
            'post' => $post,
            'form' => $form->createView(),
        ]);
    }
    /**
    * @Route("/{id}/delete", requirements={"id": "\d+"}, name="delete")
    * @Method({"GET"})
    */
    public function delete(Request $request, Post $post): Response
    {
        $em = $this->getDoctrine()->getManager();
        $em ->remove($post);
        $em ->flush();
        $this->addFlash('success', 'post deleted');
        return $this->redirectToRoute('posts');
    }
}