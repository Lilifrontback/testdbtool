<?php
namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use MakinaCorpus\DbToolsBundle\Attribute\Anonymize;

#[ORM\Entity(repositoryClass: UserRepository::class)]
#[ORM\Table(name: '`user`')]
class User
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Anonymize(type: 'en-us.lastname')]
    private ?string $lastName = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Anonymize(type: 'en-us.firstname')]
    private ?string $firstName = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Anonymize(type: 'en-us.address')]
    private ?string $adress = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Anonymize(type: 'en-us.secu')]
    private ?string $secu = null;

    #[ORM\Column(length: 255)]
    #[Anonymize(type: 'en-us.phone')]
    private ?string $phone = null;

    #[ORM\Column(length: 255, nullable: true)]
    #[Anonymize(type: 'de-de.cb')]
    private ?string $cb = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    public function setLastName(?string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    public function setFirstName(?string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->adress;
    }

    public function setAdress(?string $adress): self
    {
        $this->adress = $adress;

        return $this;
    }

    public function getSecu(): ?string
    {
        return $this->secu;
    }

    public function setSecu(?string $secu): self
    {
        $this->secu = $secu;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getCb(): ?string
    {
        return $this->cb;
    }

    public function setCb(string $cb): self
    {
        $this->cb = $cb;

        return $this;
    }
}
