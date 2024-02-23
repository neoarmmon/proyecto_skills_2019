<?php

namespace App\Controller\Api;

use App\Entity\Juegos;
use App\Entity\JuegosGenero;
use App\Form\JuegosType;
use App\Repository\JuegosRepository;
use App\Repository\JuegosGeneroRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\JsonResponse;
use Doctrine\DBAL\Types\Types;


#[Route('api/juegos')]
class ApiJuegosController extends AbstractController
{
}
