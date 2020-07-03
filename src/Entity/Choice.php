<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ChoiceRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Serializer\Annotation\Groups;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=ChoiceRepository::class)
 */
class Choice
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var Card Carte liée a ce choix
     * @ORM\ManyToOne(targetEntity=Card::class, inversedBy="choices")
     * @ORM\JoinColumn(nullable=false)
     */
    private $card;

    /**
     * @Groups("card")
     * @var string Intitulé du choix
     * @ORM\Column(type="string", length=300)
     */
    private $label;

    /**
     * @Groups("card")
     * @var int Impact au niveau de l'argent
     * @ORM\Column(type="integer")
     */
    private $money;

    /**
     * @Groups("card")
     * @var int Impact au niveau de l'opinion publique
     * @ORM\Column(type="integer")
     */
    private $opinion;

    /**
     * @Groups("card")
     * @var int Impact au niveau de la recherche scientifique
     * @ORM\Column(type="integer")
     */
    private $search;

    /**
     * @Groups("card")
     * @var Consequence Conséquence du choix
     * @ORM\OneToOne(targetEntity=Consequence::class, cascade={"persist", "remove"})
     */
    private $consequence;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCard(): ?Card
    {
        return $this->card;
    }

    public function setCard(?Card $card): self
    {
        $this->card = $card;

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

    public function getMoney(): ?int
    {
        return $this->money;
    }

    public function setMoney(int $money): self
    {
        $this->money = $money;

        return $this;
    }

    public function getOpinion(): ?int
    {
        return $this->opinion;
    }

    public function setOpinion(int $opinion): self
    {
        $this->opinion = $opinion;

        return $this;
    }

    public function getSearch(): ?int
    {
        return $this->search;
    }

    public function setSearch(int $search): self
    {
        $this->search = $search;

        return $this;
    }

    public function getConsequence(): ?Consequence
    {
        return $this->consequence;
    }

    public function setConsequence(?Consequence $consequence): self
    {
        $this->consequence = $consequence;

        return $this;
    }
}
