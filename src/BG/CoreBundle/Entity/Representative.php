<?php

namespace BG\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Representative
 *
 * @ORM\Table("representative")
 * @ORM\Entity(repositoryClass="BG\CoreBundle\Repository\RepresentativeRepository")
 */
class Representative
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_base", type="boolean")
     */
    private $isBase;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", nullable=true, length=255)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", nullable=true, length=255)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="function", type="string", length=255)
     */
    private $function;

    /**
     * @var int
     *
     * @ORM\Column(name="phone", nullable=true, type="integer")
     */
    private $phone;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", nullable=true, length=255)
     */
    private $mail;

    /**
     * Create from customer.
     *
     * @return Representative
     */
     public static function fromCustomer(\BG\CoreBundle\Entity\Customer $customer)
     {
         return (new Representative())->setIsBase(false)->setFunction($customer->getCompanyName())->setPhone($customer->getPhone())->setMail($customer->getMail());
     }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set isBase.
     *
     * @param bool $isBase
     *
     * @return Representative
     */
    public function setIsBase($isBase)
    {
        $this->isBase = $isBase;

        return $this;
    }

    /**
     * Get isBase.
     *
     * @return bool
     */
    public function getIsBase()
    {
        return $this->isBase;
    }

    /**
     * Set firstName.
     *
     * @param string|null $firstName
     *
     * @return Representative
     */
    public function setFirstName($firstName = null)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName.
     *
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName.
     *
     * @param string|null $lastName
     *
     * @return Representative
     */
    public function setLastName($lastName = null)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName.
     *
     * @return string|null
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set function.
     *
     * @param string $function
     *
     * @return Representative
     */
    public function setFunction($function)
    {
        $this->function = $function;

        return $this;
    }

    /**
     * Get function.
     *
     * @return string
     */
    public function getFunction()
    {
        return $this->function;
    }

    /**
     * Set phone.
     *
     * @param int|null $phone
     *
     * @return Representative
     */
    public function setPhone($phone = null)
    {
        $this->phone = $phone;

        return $this;
    }

    /**
     * Get phone.
     *
     * @return int|null
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Set mail.
     *
     * @param string|null $mail
     *
     * @return Representative
     */
    public function setMail($mail = null)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail.
     *
     * @return string|null
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * To string.
     *
     * @return string
     */
    public function __toString()
    {
      return $this->isBase || ($this->lastName == null && $this->firstName == null)? "{$this->function}" : "{$this->lastName} {$this->firstName}";
    }
}
