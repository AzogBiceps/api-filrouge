<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\CardRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=CardRepository::class)
 */
class Card
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Category::class, inversedBy="cards")
     * @ORM\JoinColumn(nullable=false)
     */
    private $category;

    /**
     * @ORM\Column(type="text")
     */
    private $context;

    /**
     * @ORM\OneToMany(targetEntity=Choice::class, mappedBy="card", orphanRemoval=true)
     */
    private $choices;

    /**
     * @ORM\OneToOne(targetEntity=Consequence::class, mappedBy="Card", cascade={"persist", "remove"})
     */
    private $consequence;

    public function __construct()
    {
        $this->choices = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

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

    /**
     * @return Collection|Choice[]
     */
    public function getChoices(): Collection
    {
        return $this->choices;
    }

    public function addChoice(Choice $choice): self
    {
        if (!$this->choices->contains($choice)) {
            $this->choices[] = $choice;
            $choice->setCard($this);
        }

        return $this;
    }

    public function removeChoice(Choice $choice): self
    {
        if ($this->choices->contains($choice)) {
            $this->choices->removeElement($choice);
            // set the owning side to null (unless already changed)
            if ($choice->getCard() === $this) {
                $choice->setCard(null);
            }
        }

        return $this;
    }

    public function getConsequence(): ?Consequence
    {
        return $this->consequence;
    }

    public function setConsequence(?Consequence $consequence): self
    {
        $this->consequence = $consequence;

        // set (or unset) the owning side of the relation if necessary
        $newCard = null === $consequence ? null : $this;
        if ($consequence->getCard() !== $newCard) {
            $consequence->setCard($newCard);
        }

        return $this;
    }
}
