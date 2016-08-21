<?php

namespace BOMO\BaseBundle\Model;

use Symfony\Component\Validator\Constraints as Assert;

class Measure
{
    /**
     * @Assert\Type("string")
     * @Assert\NotBlank()
     * @Assert\EqualTo(1)
     */
    protected $v;

    /**
     * @Assert\Type("string")
     * @Assert\NotBlank()
     * @Assert\Regex("/(pageview|screenview|event)/")
     */
    protected $ht;

    /**
     * @Assert\Type("string")
     * @Assert\NotBlank()
     * @Assert\Regex("/^https?:\/\//")
     */
    protected $dl;
    
    /**
     * @Assert\Type("string")
     * @Assert\Regex("/^https?:\/\//")
     */
    protected $dr;

    /**
     * @Assert\Type("string")
     * @Assert\NotBlank()
     */
    protected $wci;

    /**
     * @Assert\Type("string")
     * @Assert\Regex("/(profile|recruiter|visitor|wizbii_employee)/")
     * @Assert\NotBlank()
     */
    protected $wct;    

    /**
     * @Assert\Type("string")
     */
    protected $ec;

    /**
     * @Assert\Type("string")
     */
    protected $ea;

    /**
     * @Assert\Type("string")
     */
    protected $el;

    /**
     * @Assert\Type("integer")
     */
    protected $ev;

    /**
     * @Assert\Type("string")
     * @Assert\Regex("/^UA-\d{4}-\d/")
     * @Assert\NotBlank()
     */
    protected $tid;

    /**
     * @Assert\Type("string")
     * @Assert\Regex("/(web|apps|backend)/")
     * @Assert\NotBlank()
     */
    protected $ds;

    /**
     * @Assert\Type("string")
     */
    protected $cn;

    /**
     * @Assert\Type("string")
     */
    protected $cs;

    /**
     * @Assert\Type("string")
     */
    protected $cm;

    /**
     * @Assert\Type("string")
     */
    protected $ck;

    /**
     * @Assert\Type("string")
     */
    protected $cc;

    /**
     * @Assert\Type("string")
     */
    protected $sn;

    /**
     * @Assert\Type("string")
     */
    protected $an;    

    /**
     * @Assert\Type("string")
     */
    protected $av;

    /**
     * @Assert\Type("integer")
     */
    protected $qt;

    /**
     * @Assert\Type("integer")
     */
    protected $z;

    /**
     * Set v
     *
     * @param string $v
     * @return $this
     */
    public function setV($v)
    {
        $this->v = $v;
        return $this;
    }

    /**
     * Get v
     *
     * @return string $v
     */
    public function getV()
    {
        return $this->v;
    }

    /**
     * Set ht
     *
     * @param string $ht
     * @return $this
     */
    public function setHt($ht)
    {
        $this->ht = $ht;
        return $this;
    }

    /**
     * Get ht
     *
     * @return string $ht
     */
    public function getHt()
    {
        return $this->ht;
    }

    /**
     * Set dl
     *
     * @param string $dl
     * @return $this
     */
    public function setDl($dl)
    {
        $this->dl = $dl;
        return $this;
    }

    /**
     * Get dl
     *
     * @return string $dl
     */
    public function getDl()
    {
        return $this->dl;
    }

    /**
     * Set dr
     *
GG     * @param string $dr
     * @return $this
     */
    public function setDr($dr)
    {
        $this->dr = $dr;
        return $this;
    }

    /**
     * Get dr
     *
     * @return string $dr
     */
    public function getDr()
    {
        return $this->dr;
    }

    /**
     * Set wci
     *
     * @param BOMO\BaseBundle\Document\Wci $wci
     * @return $this
     */
    public function setWci(\BOMO\BaseBundle\Document\Wci $wci)
    {
        $this->wci = $wci;
        return $this;
    }

    /**
     * Get wci
     *
     * @return BOMO\BaseBundle\Document\Wci $wci
     */
    public function getWci()
    {
        return $this->wci;
    }

    /**
     * Set wct
     *
     * @param string $wct
     * @return $this
     */
    public function setWct($wct)
    {
        $this->wct = $wct;
        return $this;
    }

    /**
     * Get wct
     *
     * @return string $wct
     */
    public function getWct()
    {
        return $this->wct;
    }

    /**
     * Set ec
     *
     * @param string $ec
     * @return $this
     */
    public function setEc($ec)
    {
        $this->ec = $ec;
        return $this;
    }

    /**
     * Get ec
     *
     * @return string $ec
     */
    public function getEc()
    {
        return $this->ec;
    }

    /**
     * Set ea
     *
     * @param string $ea
     * @return $this
     */
    public function setEa($ea)
    {
        $this->ea = $ea;
        return $this;
    }

    /**
     * Get ea
     *
     * @return string $ea
     */
    public function getEa()
    {
        return $this->ea;
    }

    /**
     * Set el
     *
     * @param string $el
     * @return $this
     */
    public function setEl($el)
    {
        $this->el = $el;
        return $this;
    }

    /**
     * Get el
     *
     * @return string $el
     */
    public function getEl()
    {
        return $this->el;
    }

    /**
     * Set ev
     *
     * @param int $ev
     * @return $this
     */
    public function setEv($ev)
    {
        $this->ev = $ev;
        return $this;
    }

    /**
     * Get ev
     *
     * @return int $ev
     */
    public function getEv()
    {
        return $this->ev;
    }

    /**
     * Set tid
     *
     * @param string $tid
     * @return $this
     */
    public function setTid($tid)
    {
        $this->tid = $tid;
        return $this;
    }

    /**
     * Get tid
     *
     * @return string $tid
     */
    public function getTid()
    {
        return $this->tid;
    }

    /**
     * Set ds
     *
     * @param string $ds
     * @return $this
     */
    public function setDs($ds)
    {
        $this->ds = $ds;
        return $this;
    }

    /**
     * Get ds
     *
     * @return string $ds
     */
    public function getDs()
    {
        return $this->ds;
    }

    /**
     * Set cn
     *
     * @param string $cn
     * @return $this
     */
    public function setCn($cn)
    {
        $this->cn = $cn;
        return $this;
    }

    /**
     * Get cn
     *
     * @return string $cn
     */
    public function getCn()
    {
        return $this->cn;
    }

    /**
     * Set cs
     *
     * @param string $cs
     * @return $this
     */
    public function setCs($cs)
    {
        $this->cs = $cs;
        return $this;
    }

    /**
     * Get cs
     *
     * @return string $cs
     */
    public function getCs()
    {
        return $this->cs;
    }

    /**
     * Set cm
     *
     * @param string $cm
     * @return $this
     */
    public function setCm($cm)
    {
        $this->cm = $cm;
        return $this;
    }

    /**
     * Get cm
     *
     * @return string $cm
     */
    public function getCm()
    {
        return $this->cm;
    }

    /**
     * Set ck
     *
     * @param string $ck
     * @return $this
     */
    public function setCk($ck)
    {
        $this->ck = $ck;
        return $this;
    }

    /**
     * Get ck
     *
     * @return string $ck
     */
    public function getCk()
    {
        return $this->ck;
    }

    /**
     * Set cc
     *
     * @param string $cc
     * @return $this
     */
    public function setCc($cc)
    {
        $this->cc = $cc;
        return $this;
    }

    /**
     * Get cc
     *
     * @return string $cc
     */
    public function getCc()
    {
        return $this->cc;
    }

    /**
     * Set sn
     *
     * @param string $sn
     * @return $this
     */
    public function setSn($sn)
    {
        $this->sn = $sn;
        return $this;
    }

    /**
     * Get sn
     *
     * @return string $sn
     */
    public function getSn()
    {
        return $this->sn;
    }

    /**
     * Set an
     *
     * @param string $an
     * @return $this
     */
    public function setAn($an)
    {
        $this->an = $an;
        return $this;
    }

    /**
     * Get an
     *
     * @return string $an
     */
    public function getAn()
    {
        return $this->an;
    }

    /**
     * Set av
     *
     * @param string $av
     * @return $this
     */
    public function setAv($av)
    {
        $this->av = $av;
        return $this;
    }

    /**
     * Get av
     *
     * @return string $av
     */
    public function getAv()
    {
        return $this->av;
    }

    /**
     * Set qt
     *
     * @param int $qt
     * @return $this
     */
    public function setQt($qt)
    {
        $this->qt = $qt;
        return $this;
    }

    /**
     * Get qt
     *
     * @return int $qt
     */
    public function getQt()
    {
        return $this->qt;
    }

    /**
     * Set z
     *
     * @param int $z
     * @return $this
     */
    public function setZ($z)
    {
        $this->z = $z;
        return $this;
    }

    /**
     * Get z
     *
     * @return int $z
     */
    public function getZ()
    {
        return $this->z;
    }
}
