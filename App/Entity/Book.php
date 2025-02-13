<?php

namespace App\Entity;

class Book
{
    protected ?int $id = null;
    protected string $title = '';
    protected string $description = '';
    protected string $image = '';
    protected int $type_id = 0;
    protected int $author_id = 0;
    protected string $authorFirstName = '';
    protected string $authorLastName = '';
    protected string $typeName = '';

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of description
     */ 
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set the value of description
     *
     * @return  self
     */ 
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    


    /**
     * Get the value of image
     */ 
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */ 
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get the value of type_id
     */ 
    public function getTypeId()
    {
        return $this->type_id;
    }

    /**
     * Set the value of type_id
     *
     * @return  self
     */ 
    public function setTypeId($type_id)
    {
        $this->type_id = $type_id;

        return $this;
    }

    /**
     * Get the value of author_id
     */ 
    public function getAuthorId()
    {
        return $this->author_id;
    }

    /**
     * Set the value of author_id
     *
     * @return  self
     */ 
    public function setAuthorId($author_id)
    {
        $this->author_id = $author_id;

        return $this;
    }





    /**
     * Get the value of authorFirstName
     */ 
    public function getAuthorFirstName()
    {
        return $this->authorFirstName;
    }

    /**
     * Set the value of authorFirstName
     *
     * @return  self
     */ 
    public function setAuthorFirstName($authorFirstName)
    {
        $this->authorFirstName = $authorFirstName;

        return $this;
    }

    /**
     * Get the value of authorLastName
     */ 
    public function getAuthorLastName()
    {
        return $this->authorLastName;
    }

    /**
     * Set the value of authorLastName
     *
     * @return  self
     */ 
    public function setAuthorLastName($authorLastName)
    {
        $this->authorLastName = $authorLastName;

        return $this;
    }

    /**
     * Get the value of typeName
     */ 
    public function getTypeName()
    {
        return $this->typeName;
    }

    /**
     * Set the value of typeName
     *
     * @return  self
     */ 
    public function setTypeName($typeName)
    {
        $this->typeName = $typeName;

        return $this;
    }
}