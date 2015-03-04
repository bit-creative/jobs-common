<?php namespace Jobs;

use Jobs\Interfaces\JobInterface;

class Job implements JobInterface
{
    public $id, $title, $description, $source, $url, $query, $type,
           $companies, $locations, $industries, $dates, $salaries, $codes;

    public function __construct($attributes = [])
    {
        foreach ($attributes as $name => $value) {
            $method = 'set'.ucwords($name);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    public function setId($id = NULL)
    {
        $this->id = $id;
    }

    public function setTitle($title = NULL)
    {
        $this->title = $title;
    }

    public function setDescription($description = NULL)
    {
        $this->description = $description;
    }

    public function setSource($source = NULL)
    {
        $this->source = $source;
    }

    public function setUrl($url = NULL)
    {
        $this->url = $url;
    }

    public function setQuery($query = NULL)
    {
        $this->query = $query;
    }

    public function setType($type = NULL)
    {
        $this->type = $type;
    }

    public function setCompanies($companies = [])
    {

    }

    public function setLocations($locations = [])
    {

    }

    public function setIndustries($industries = [])
    {

    }

    public function setDates($dates = [])
    {

    }

    public function setSalaries($salaries = [])
    {

    }

    public function setCodes($codes = [])
    {

    }

}
