<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="dform")
 */
class DForm
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $userId;


    /**
     * @var string
     * @ORM\Column(name="title", type="string")
     */
    private $title;


    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string")
     */
    private $firstName;


    /**
     * @var string
     * @ORM\Column(name="lastname", type="string")
     */
    private $lastName;



    /**
     * @var string
     *
     * @ORM\Column(name="firstname1", type="string", nullable=true)
     */
    private $firstName1;


    /**
     * @var string
     * @ORM\Column(name="lastname1", type="string", nullable=true)
     */
    private $lastName1;



    /**
     * @var string
     *
     * @ORM\Column(name="firstname2", type="string", nullable=true)
     */
    private $firstName2;


    /**
     * @var string
     * @ORM\Column(name="lastname2", type="string", nullable=true)
     */
    private $lastName2;



    /**
     * @var string
     *
     * @ORM\Column(name="firstname3", type="string", nullable=true)
     */
    private $firstName3;


    /**
     * @var string
     * @ORM\Column(name="lastname3", type="string", nullable=true)
     */
    private $lastName3;


    /**
     * @var string
     *
     * @ORM\Column(name="firstname4", type="string", nullable=true)
     */
    private $firstName4;


    /**
     * @var string
     * @ORM\Column(name="lastname4", type="string", nullable=true)
     */
    private $lastName4;



    /**
     * @var string
     *
     * @ORM\Column(name="firstname5", type="string", nullable=true)
     */
    private $firstName5;


    /**
     * @var string
     * @ORM\Column(name="lastname5", type="string", nullable=true)
     */
    private $lastName5;


    /**
     * @var string
     *
     * @ORM\Column(name="firstname6", type="string", nullable=true)
     */
    private $firstName6;


    /**
     * @var string
     * @ORM\Column(name="lastname6", type="string", nullable=true)
     */
    private $lastName6;



    /**
     * @var string
     *
     * @ORM\Column(name="firstname7", type="string", nullable=true)
     */
    private $firstName7;


    /**
     * @var string
     * @ORM\Column(name="lastname7", type="string", nullable=true)
     */
    private $lastName7;



    /**
     * @var string
     *
     * @ORM\Column(name="firstname8", type="string", nullable=true)
     */
    private $firstName8;


    /**
     * @var string
     * @ORM\Column(name="lastname8", type="string", nullable=true)
     */
    private $lastName8;



    /**
     * @var string
     *
     * @ORM\Column(name="firstname9", type="string", nullable=true)
     */
    private $firstName9;


    /**
     * @var string
     * @ORM\Column(name="lastname9", type="string", nullable=true)
     */
    private $lastName9;



    /**
     * @var string
     *
     * @ORM\Column(name="firstname10", type="string", nullable=true)
     */
    private $firstName10;


    /**
     * @var string
     * @ORM\Column(name="lastname10", type="string", nullable=true)
     */
    private $lastName10;





    /**
     * @var date
     * @ORM\Column(name="initialDate", type="string",  nullable=false)
     */
    private $initialDate;


    /**
     * @var string
     * @ORM\Column(name="initialTime", type="string",  nullable=true)
     */
    private $initialTime;


    /**
     * @var date
     * @ORM\Column(name="endingDate", type="string",  nullable=false)
     */
    private $endingDate;


    /**
     * @var string
     * @ORM\Column(name="endingTime", type="string",  nullable=true)
     */
    private $endingTime;






    /**
     * Get id
     *
     * @return int
     */

    public function getId()
    {
        return $this->id;
    }

    /**
     * Get userId
     *
     * @return int
     */

    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set userId
     * @param string $userId
     * @return DForm
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }



    /**
     * Set title
     * @param string $title
     * @return DForm
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     * @return string
     */

    public function getTitle($title = '')
    {
        return $this->title;
    }




    /**
     * Set firstName
     * @param string $firstName
     * @return DForm
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     * @return string
     */

    public function getFirstName($firstName = '')
    {
        return $this->firstName;
    }


    /**
     * Set lastName
     * @param string $lastName
     * @return DForm
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     * @return string
     */

    public function getLastName($lastName = '')
    {
        return $this->lastName;
    }





    /**
     * Set firstName1
     * @param string $firstName1
     * @return DForm
     */
    public function setFirstName1($firstName1)
    {
        $this->firstName1 = !isset($firstName1) ? '': $firstName1;

        return $this;
    }

    /**
     * Get firstName1
     * @return string
     */

    public function getFirstName1($firstName1 = '')
    {
        return $this->firstName1;
    }



    /**
     * Set lastName1
     * @param string $lastName1
     * @return DForm
     */
    public function setLastName1($lastName1)
    {
        $this->lastName1 = !isset($lastName1) ? '': $lastName1;

        return $this;
    }

    /**
     * Get lastName1
     * @return string
     */

    public function getLastName1($lastName1 = '')
    {
        return $this->lastName1;
    }




    /**
     * Set firstName2
     * @param string $firstName2
     * @return DForm
     */
    public function setFirstName2($firstName2)
    {
        $this->firstName2 = !isset($firstName2) ? '': $firstName2;

        return $this;
    }

    /**
     * Get firstName2
     * @return string
     */

    public function getFirstName2($firstName2 = '')
    {
        return $this->firstName2;
    }



    /**
     * Set lastName2
     * @param string $lastName2
     * @return DForm
     */
    public function setLastName2($lastName2)
    {
        $this->lastName2 = !isset($lastName2) ? '': $lastName2;

        return $this;
    }

    /**
     * Get lastName2
     * @return string
     */

    public function getLastName2($lastName2 = '')
    {
        return $this->lastName2;
    }





    /**
     * Set firstName3
     * @param string $firstName3
     * @return DForm
     */
    public function setFirstName3($firstName3)
    {
        $this->firstName3 = !isset($firstName3) ? '': $firstName3;

        return $this;
    }

    /**
     * Get firstName3
     * @return string
     */

    public function getFirstName3($firstName3 = '')
    {
        return $this->firstName3;
    }



    /**
     * Set lastName3
     * @param string $lastName3
     * @return DForm
     */
    public function setLastName3($lastName3)
    {
        $this->lastName3 = !isset($lastName3) ? '': $lastName3;

        return $this;
    }

    /**
     * Get lastName3
     * @return string
     */

    public function getLastName3($lastName3 = '')
    {
        return $this->lastName3;
    }





    /**
     * Set firstName4
     * @param string $firstName4
     * @return DForm
     */
    public function setFirstName4($firstName4)
    {
        $this->firstName4 = !isset($firstName4) ? '': $firstName4;

        return $this;
    }

    /**
     * Get firstName4
     * @return string
     */

    public function getFirstName4($firstName4 = '')
    {
        return $this->firstName4;
    }



    /**
     * Set lastName4
     * @param string $lastName4
     * @return DForm
     */
    public function setLastName4($lastName4)
    {
        $this->lastName4 = !isset($lastName4) ? '': $lastName4;

        return $this;
    }

    /**
     * Get lastName4
     * @return string
     */

    public function getLastName4($lastName4 = '')
    {
        return $this->lastName4;
    }




    /**
     * Set firstName5
     * @param string $firstName5
     * @return DForm
     */
    public function setFirstName5($firstName5)
    {
        $this->firstName5 = !isset($firstName5) ? '': $firstName5;

        return $this;
    }

    /**
     * Get firstName5
     * @return string
     */

    public function getFirstName5($firstName5 = '')
    {
        return $this->firstName5;
    }



    /**
     * Set lastName5
     * @param string $lastName5
     * @return DForm
     */
    public function setLastName5($lastName5)
    {
        $this->lastName5 = !isset($lastName5) ? '': $lastName5;

        return $this;
    }

    /**
     * Get lastName5
     * @return string
     */

    public function getLastName5($lastName5 = '')
    {
        return $this->lastName5;
    }




    /**
     * Set firstName6
     * @param string $firstName6
     * @return DForm
     */
    public function setFirstName6($firstName6)
    {
        $this->firstName6 = !isset($firstName6) ? '': $firstName6;

        return $this;
    }

    /**
     * Get firstName6
     * @return string
     */

    public function getFirstName6($firstName6 = '')
    {
        return $this->firstName6;
    }



    /**
     * Set lastName6
     * @param string $lastName6
     * @return DForm
     */
    public function setLastName6($lastName6)
    {
        $this->lastName6 = !isset($lastName6) ? '': $lastName6;

        return $this;
    }

    /**
     * Get lastName6
     * @return string
     */

    public function getLastName6($lastName6 = '')
    {
        return $this->lastName6;
    }




    /**
     * Set firstName7
     * @param string $firstName7
     * @return DForm
     */
    public function setFirstName7($firstName7)
    {
        $this->firstName7 = !isset($firstName7) ? '': $firstName7;

        return $this;
    }

    /**
     * Get firstName7
     * @return string
     */

    public function getFirstName7($firstName7 = '')
    {
        return $this->firstName7;
    }



    /**
     * Set lastName7
     * @param string $lastName7
     * @return DForm
     */
    public function setLastName7($lastName7)
    {
        $this->lastName7 = !isset($lastName7) ? '': $lastName7;

        return $this;
    }

    /**
     * Get lastName7
     * @return string
     */

    public function getLastName7($lastName7 = '')
    {
        return $this->lastName7;
    }




    /**
     * Set firstName8
     * @param string $firstName8
     * @return DForm
     */
    public function setFirstName8($firstName8)
    {
        $this->firstName8 = !isset($firstName8) ? '': $firstName8;

        return $this;
    }

    /**
     * Get firstName8
     * @return string
     */

    public function getFirstName8($firstName8 = '')
    {
        return $this->firstName8;
    }



    /**
     * Set lastName8
     * @param string $lastName8
     * @return DForm
     */
    public function setLastName8($lastName8)
    {
        $this->lastName8 = !isset($lastName8) ? '': $lastName8;

        return $this;
    }

    /**
     * Get lastName8
     * @return string
     */

    public function getLastName8($lastName8 = '')
    {
        return $this->lastName8;
    }




    /**
     * Set firstName9
     * @param string $firstName9
     * @return DForm
     */
    public function setFirstName9($firstName9)
    {
        $this->firstName9 = !isset($firstName9) ? '': $firstName9;

        return $this;
    }

    /**
     * Get firstName9
     * @return string
     */

    public function getFirstName9($firstName9 = '')
    {
        return $this->firstName9;
    }



    /**
     * Set lastName9
     * @param string $lastName9
     * @return DForm
     */
    public function setLastName9($lastName9)
    {
        $this->lastName9 = !isset($lastName9) ? '': $lastName9;

        return $this;
    }

    /**
     * Get lastName9
     * @return string
     */

    public function getLastName9($lastName9 = '')
    {
        return $this->lastName9;
    }




    /**
     * Set firstName10
     * @param string $firstName10
     * @return DForm
     */
    public function setFirstName10($firstName10)
    {
        $this->firstName10 = !isset($firstName10) ? '': $firstName10;

        return $this;
    }

    /**
     * Get firstName10
     * @return string
     */

    public function getFirstName10($firstName10 = '')
    {
        return $this->firstName10;
    }



    /**
     * Set lastName10
     * @param string $lastName10
     * @return DForm
     */
    public function setLastName10($lastName10)
    {
        $this->lastName10 = !isset($lastName10) ? '': $lastName10;

        return $this;
    }

    /**
     * Get lastName10
     * @return string
     */

    public function getLastName10($lastName10 = '')
    {
        return $this->lastName10;
    }





    /**
     * Set initialDate
     * @param date $initialDate
     * @return DForm
     */
    public function setInitialDate($initialDate)
    {
        $this->initialDate = $initialDate;

        return $this;
    }

    /**
     * Get initialDate
     * @return date
     */

    public function getInitialDate($initialDate = '')
    {
        return $this->initialDate;
    }




    /**
     * Set initialTime
     * @param string $initialTime
     * @return DForm
     */
    public function setInitialTime($initialTime)
    {
        $this->initialTime = !isset($initialTime) ? '': $initialTime;

        return $this;
    }

    /**
     * Get initialTime
     * @return string
     */

    public function getInitialTime($initialTime = '')
    {
        return $this->initialTime;
    }





    /**
     * Set endingDate
     * @param date $endingDate
     * @return DForm
     */
    public function setEndingDate($endingDate)
    {
        $this->endingDate = !isset($endingDate) ? '': $endingDate;

        return $this;
    }

    /**
     * Get endingDate
     * @return date
     */

    public function getEndingDate($endingDate = '')
    {
        return $this->endingDate;
    }




    /**
     * Set endingTime
     * @param string $endingTime
     * @return DForm
     */
    public function setEndingTime($endingTime)
    {
        $this->endingTime = !isset($endingTime) ? '': $endingTime;

        return $this;
    }

    /**
     * Get endingTime
     * @return string
     */

    public function getEndingTime($endingTime = '')
    {
        return $this->endingTime;
    }

}
