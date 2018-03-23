<?php
/**
 * Created by PhpStorm.
 * User: Grzesiek
 * Date: 23.03.2018
 * Time: 14:44
 */

namespace AppBundle\Entity;


use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity
 * @ORM\Table(name="galeria")
 * @Vich\Uploadable
 */
class Galeria
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     */
    private $name;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $photo1;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $photo2;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $photo3;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $photo4;

    /**
     * @Vich\UploadableField(mapping="galery_photos", fileNameProperty="photo1")
     * @var File
     */
    private $photo1File;

    /**
     * @Vich\UploadableField(mapping="galery_photos", fileNameProperty="photo2")
     * @var File
     */
    private $photo2File;

    /**
     * @Vich\UploadableField(mapping="galery_photos", fileNameProperty="photo3")
     * @var File
     */
    private $photo3File;

    /**
     * @Vich\UploadableField(mapping="galery_photos", fileNameProperty="photo4")
     * @var File
     */
    private $photo4File;

    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPhoto1()
    {
        return $this->photo1;
    }

    /**
     * @param mixed $photo1
     */
    public function setPhoto1($photo1)
    {
        $this->photo1 = $photo1;
    }

    /**
     * @return mixed
     */
    public function getPhoto2()
    {
        return $this->photo2;
    }

    /**
     * @param mixed $photo2
     */
    public function setPhoto2($photo2)
    {
        $this->photo2 = $photo2;
    }

    /**
     * @return mixed
     */
    public function getPhoto3()
    {
        return $this->photo3;
    }

    /**
     * @param mixed $photo3
     */
    public function setPhoto3($photo3)
    {
        $this->photo3 = $photo3;
    }

    /**
     * @return mixed
     */
    public function getPhoto4()
    {
        return $this->photo4;
    }

    /**
     * @param mixed $photo4
     */
    public function setPhoto4($photo4)
    {
        $this->photo4 = $photo4;
    }

    public function setPhoto1File(File $photo1 = null)
    {
        $this->photo1File = $photo1;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($photo1) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getPhoto1File()
    {
        return $this->photo1File;
    }

    public function setPhoto2File(File $photo2 = null)
    {
        $this->photo2File = $photo2;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($photo2) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getPhoto2File()
    {
        return $this->photo2File;
    }

    public function setPhoto3File(File $photo3 = null)
    {
        $this->photo3File = $photo3;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($photo3) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getPhoto3File()
    {
        return $this->photo3File;
    }

    public function setPhoto4File(File $photo4 = null)
    {
        $this->photo4File = $photo4;

        // VERY IMPORTANT:
        // It is required that at least one field changes if you are using Doctrine,
        // otherwise the event listeners won't be called and the file is lost
        if ($photo4) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getPhoto4File()
    {
        return $this->photo4File;
    }

    /**
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
    }
}