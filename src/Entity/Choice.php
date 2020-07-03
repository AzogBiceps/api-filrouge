<?php

namespace App\Entity;

use App\Repository\ChoiceRepository;
use Doctrine\ORM\Mapping as ORM;

/**
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
     * @ORM\ManyToOne(targetEntity=Card::class, inversedBy="choices")
     * @ORM\JoinColumn(nullable=false)
     */
    private $card;

    /**
     * @ORM\Column(type="string", length=300)
     */
    private $label;

    /**
     * @ORM\Column(type="integer")
     */
    private $money;

    /**
     * @ORM\Column(type="integer")
     */
    private $opinion;

    /**
     * @ORM\Column(type="integer")
     */
    private $search;

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
}
