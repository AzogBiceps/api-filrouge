<?php

namespace App\Entity;

use App\Repository\ConsequenceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ConsequenceRepository::class)
 */
class Consequence
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=Card::class, inversedBy="consequence", cascade={"persist", "remove"})
     */
    private $Card;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $label;

    /**
     * @ORM\Column(type="text")
     */
    private $context;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $contextSuccess;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $buttonTextSuccess;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imageSuccess;

    /**
     * @ORM\Column(type="integer")
     */
    private $moneySuccess;

    /**
     * @ORM\Column(type="integer")
     */
    private $opinionSuccess;

    /**
     * @ORM\Column(type="integer")
     */
    private $searchSuccess;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $contextFail;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $buttonTextFail;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $imageFail;

    /**
     * @ORM\Column(type="integer")
     */
    private $moneyFail;

    /**
     * @ORM\Column(type="integer")
     */
    private $opinionFail;

    /**
     * @ORM\Column(type="integer")
     */
    private $searchFail;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCard(): ?Card
    {
        return $this->Card;
    }

    public function setCard(?Card $Card): self
    {
        $this->Card = $Card;

        return $this;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getContext(): ?string
    {
        return $this->context;
    }

    public function setContext(string $context): self
    {
        $this->context = $context;

        return $this;
    }

    public function getContextSuccess(): ?string
    {
        return $this->contextSuccess;
    }

    public function setContextSuccess(string $contextSuccess): self
    {
        $this->contextSuccess = $contextSuccess;

        return $this;
    }

    public function getButtonTextSuccess(): ?string
    {
        return $this->buttonTextSuccess;
    }

    public function setButtonTextSuccess(string $buttonTextSuccess): self
    {
        $this->buttonTextSuccess = $buttonTextSuccess;

        return $this;
    }

    public function getImageSuccess(): ?string
    {
        return $this->imageSuccess;
    }

    public function setImageSuccess(string $imageSuccess): self
    {
        $this->imageSuccess = $imageSuccess;

        return $this;
    }

    public function getMoneySuccess(): ?int
    {
        return $this->moneySuccess;
    }

    public function setMoneySuccess(int $moneySuccess): self
    {
        $this->moneySuccess = $moneySuccess;

        return $this;
    }

    public function getOpinionSuccess(): ?int
    {
        return $this->opinionSuccess;
    }

    public function setOpinionSuccess(int $opinionSuccess): self
    {
        $this->opinionSuccess = $opinionSuccess;

        return $this;
    }

    public function getSearchSuccess(): ?int
    {
        return $this->searchSuccess;
    }

    public function setSearchSuccess(int $searchSuccess): self
    {
        $this->searchSuccess = $searchSuccess;

        return $this;
    }

    public function getContextFail(): ?string
    {
        return $this->contextFail;
    }

    public function setContextFail(string $contextFail): self
    {
        $this->contextFail = $contextFail;

        return $this;
    }

    public function getButtonTextFail(): ?string
    {
        return $this->buttonTextFail;
    }

    public function setButtonTextFail(string $buttonTextFail): self
    {
        $this->buttonTextFail = $buttonTextFail;

        return $this;
    }

    public function getImageFail(): ?string
    {
        return $this->imageFail;
    }

    public function setImageFail(string $imageFail): self
    {
        $this->imageFail = $imageFail;

        return $this;
    }

    public function getMoneyFail(): ?int
    {
        return $this->moneyFail;
    }

    public function setMoneyFail(int $moneyFail): self
    {
        $this->moneyFail = $moneyFail;

        return $this;
    }

    public function getOpinionFail(): ?int
    {
        return $this->opinionFail;
    }

    public function setOpinionFail(int $opinionFail): self
    {
        $this->opinionFail = $opinionFail;

        return $this;
    }

    public function getSearchFail(): ?int
    {
        return $this->searchFail;
    }

    public function setSearchFail(int $searchFail): self
    {
        $this->searchFail = $searchFail;

        return $this;
    }
}
