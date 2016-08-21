<?php

namespace BOMO\ApiBundle\Controller;

use FOS\RestBundle\Controller\Annotations;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Exception\InvalidParameterException;
use FOS\RestBundle\Request\ParamFetcher;
use FOS\RestBundle\Routing\ClassResourceInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use BOMO\BaseBundle\Util as BOMOUtil;
use BOMO\BaseBundle\Document\Measure as MeasureDocument;

class MeasureController extends FOSRestController implements ClassResourceInterface
{
    /**
     * @Annotations\Post("/collect1")
     * @Annotations\View()
     * @Annotations\RequestParam(name="v", requirements="1" ,nullable=false )
     * @Annotations\RequestParam(name="t", requirements="(pageview|screenview|event)", nullable=false )
     * @Annotations\RequestParam(name="dl", requirements="^https?://", nullable=false )
     * @Annotations\RequestParam(name="dr", requirements="^https?://", nullable=true )
     * @Annotations\RequestParam(name="wct", requirements="(profile|recruiter|visitor|wizbii_employee)", nullable=true)
     * @Annotations\RequestParam(name="wci", requirements="\w+", nullable=false)
     * @Annotations\RequestParam(name="ec", requirements="\w+", nullable=false)
     * @Annotations\RequestParam(name="ea", requirements="\w+", nullable=false)
     * @Annotations\RequestParam(name="el", requirements="\w+", nullable=true)
     * @Annotations\RequestParam(name="ev", requirements="^\d+", nullable=true)
     * @Annotations\RequestParam(name="tid", requirements="UA-\d{4}-\d{1}", nullable=false)
     * @Annotations\RequestParam(name="ds", requirements="(web|apps|backend)", nullable=false)
     * @Annotations\RequestParam(name="cn", requirements="\w+", nullable=true)
     * @Annotations\RequestParam(name="cs", requirements="\w+", nullable=true)
     * @Annotations\RequestParam(name="cm", requirements="\w+", nullable=true)
     * @Annotations\RequestParam(name="ck", requirements="\w+", nullable=true)
     * @Annotations\RequestParam(name="cc", requirements="\w+", nullable=true)
     * @Annotations\RequestParam(name="sn", requirements="\w+", nullable=true)
     * @Annotations\RequestParam(name="an", requirements="\w+", nullable=true)
     * @Annotations\RequestParam(name="av", requirements="\d\.\d\.\d", nullable=true)
     * @Annotations\RequestParam(name="qt", requirements="\d+", nullable=true)
     * @Annotations\RequestParam(name="z", requirements="\d+", nullable=true)
     */
    public function postAction(Request $request, ParamFetcher $paramFetcher)
    {
        /* Process required attributes */
        $errors = array();
        
        foreach ($paramFetcher->getParams() as $name => $param) {
            try {
                $paramFetcher->get($name);
            } catch (InvalidParameterException $e) {
                array_push($errors, array('errno' => 42, 'message' => $e->getMessage()));
            }
        }
        
        if (0 < count($errors)) {
            return array(
                'success' => false,
                'errors' => $errors,
            );
        }

        /* Creator exists ? */
    }

    /**
     * @Annotations\Post("/collect")
     * @Annotations\View(StatusCode="201")
     */
    public function postFormTypeAction(Request $request)
    {
        $form = $this->createForm(new \BOMO\ApiBundle\Form\Type\MeasureType());

        $form->handleRequest($request);

        if ($form->isValid()) {
            $data = $form->getData();
            
            $wizbiiCreator = $this
                ->get('doctrine_mongodb')
                ->getRepository('BOMOBaseBundle:WizbiiCreator')
                ->findOneByName($data->getWci())
                ;

            $measure = new MeasureDocument();
            $measure
                ->setVersion($data->getV())
                ->setHitType($data->getHt())
                ->setDocumentLocation($data->getDl())
                ->setDocumentReferer($data->getDr())
                ->setWizbiiCreator($wizbiiCreator)
                ->setWizbiiCreatorType($data->getWct())
                ->setEventCategory($data->getEc())
                ->setEventAction($data->getEv())
                ->setEventLabel($data->getEl())
                ->setEventValue($data->getEv())
                ->setTacking($data->getTid())
                ->setDataSource($data->getDs())
                ->setCampaignName($data->getCn())
                ->setCampaignSource($data->getCs())
                ->setCampaignMedium($data->getCm())
                ->setCampaignKeyword($data->getCk())
                ->setCampaignContent($data->getCc())
                ->setScreenName($data->getSn())
                ->setApplicationName($data->getAn())
                ->setApplicationVersion($data->getAv())
                ->setQueueTime($data->getQt())
                ->setCacheBurster($data->getZ())
                ;

            $dm = $this->get('doctrine_mongodb')->getManager();
            $dm->persist($measure);
            $dm->flush();

            return @BOMOUtil\OutputError::getOutput();
        }
        
        $formErrors = @BOMOUtil\FormError::getErrors($form);
        return $this->view(@BOMOUtil\OutputError::getOutput($formErrors), Response::HTTP_BAD_REQUEST);
    }

    /**
     * @Annotations\Get("/collect")
     * @Annotations\View()
     */
    public function getAction(Request $request)
    {
        $params = $request->query->all();

        if (isset($params['wci'])) {
            $wizbiiCreator = $this
                ->get('doctrine_mongodb')
                ->getRepository('BOMOBaseBundle:WizbiiCreator')
                ->findOneByName($params['wci'])
                ;
            
            $params['wci'] = new \MongoId($wizbiiCreator->getId());
        }

        $results = $this
            ->get('doctrine_mongodb')
            ->getRepository('BOMOBaseBundle:Measure')
            ->multipleSearch($params)
            ;

        return $results->toArray();
    }
}