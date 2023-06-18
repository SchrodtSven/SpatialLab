<?php declare(strict_types=1);
/**
 * Class representing HTTP request 
 * 
 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/SpatialLab
 * @package SpatialLab
 * @version 0.1
 * @since 2023-06-17
 */

 namespace SpatialLab\Communication\Http;

 class Request 
 {
    private string $uri = '';
    private string $method = '';
    private string $queryString = '';


    public function __construct()
    {
        $this->init();
    }
    private function init()
    {
        $this->uri = $_SERVER['REQUEST_URI'];

        $this->method = $_SERVER['REQUEST_METHOD'];

        $this->queryString = $_SERVER['QUERY_STRING'] ?? '';
    }

    /**
     * Get the value of uri
     *
     * @return string
     */
    public function getUri(): string
    {
        return $this->uri;
    }

    /**
     * Set the value of uri
     *
     * @param string $uri
     *
     * @return self
     */
    public function setUri(string $uri): self
    {
        $this->uri = $uri;

        return $this;
    }

    /**
     * Get the value of method
     *
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * Set the value of method
     *
     * @param string $method
     *
     * @return self
     */
    public function setMethod(string $method): self
    {
        $this->method = $method;

        return $this;
    }

    /**
     * Get the value of queryString
     *
     * @return string
     */
    public function getQueryString(): string
    {
        return $this->queryString;
    }

    /**
     * Set the value of queryString
     *
     * @param string $queryString
     *
     * @return self
     */
    public function setQueryString(string $queryString): self
    {
        $this->queryString = $queryString;

        return $this;
    }
 }