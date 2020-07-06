<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ConsequenceRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource()
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
     * @Groups("card")
     * @var string Label de la conséquence
     * @ORM\Column(type="string", length=255)
     */
    private $label;

    /**
     * @Groups("card")
     * @var string Contexte globale de la conséquence
     * @ORM\Column(type="text")
     */
    private $context;

    /**
     * @Groups("card")
     * @var string Contexte si succès de la conséquence
     * @ORM\Column(type="string", length=255)
     */
    private $contextSuccess;

    /**
     * @Groups("card")
     * @var string Texte du bouton si succès
     * @ORM\Column(type="string", length=255)
     */
    private $buttonTextSuccess;

    /**
     * @Groups("card")
     * @var string Image si succès
     * @ORM\Column(type="string", length=255)
     */
    private $imageSuccess;

    /**
     * @Groups("card")
     * @var int Impact sur l'argent si succès
     * @ORM\Column(type="integer")
     */
    private $moneySuccess;

    /**
     * @Groups("card")
     * @var int Impact sur l'opinion publique si succès
     * @ORM\Column(type="integer")
     */
    private $opinionSuccess;

    /**
     * @Groups("card")
     * @var int Impact sur la recherche si succès
     * @ORM\Column(type="integer")
     */
    private $searchSuccess;

    /**
     * @Groups("card")
     * @var string Contexte si non succès de la conséquence
     * @ORM\Column(type="string", length=255)
     */
    private $contextFail;

    /**
     * @Groups("card")
     * @var string Texte du bouton si non succès
     * @ORM\Column(type="string", length=255)
     */
    private $buttonTextFail;

    /**
     * @Groups("card")
     * @var string Image si non succès
     * @ORM\Column(type="string", length=255)
     */
    private $imageFail;

    /**
     * @Groups("card")
     * @var int Impact sur l'argent si non succès
     * @ORM\Column(type="integer")
     */
    private $moneyFail;

    /**
     * @Groups("card")
     * @var int Impact sur l'opinion publique si non succès
     * @ORM\Column(type="integer")
     */
    private $opinionFail;

    /**
     * @Groups("card")
     * @var int Impact sur la recherche si non succès
     * @ORM\Column(type="integer")
     */
    private $searchFail;

    public function getId(): ?int
    {
        return $this->id;
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
