<?php declare(strict_types=1);
/**
 * Front controller class 
 * 
 * - parsing request to $controller/$action/$params
 * 
 * @author Sven Schrodt<sven@schrodt.club>
 * @link https://github.com/SchrodtSven/SpatialLab
 * @package SpatialLab
 * @version 0.1
 * @since 2023-06-16
 */

namespace SpatialLab\App;
use SpatialLab\Internal\Type\StringClass;
use SpatialLab\Internal\Type\ListClass;
use SpatialLab\Communication\Http\Request;
use SpatialLab\Communication\Http\Response;
use SpatialLab\Config\Main;

class Front
{
    private StringClass $controllerName;
    private StringClass $actionName;
    private ListClass $params;

    public function __construct(private Request $request, private Response $response)
    {   
       // echo 'I\'am ' . __CLASS__;
        $this->route();
    }

    /**
     * Routing HTTP URI to Controller/action and parameters
     * 
     * 
     * @TODO work with different instances of SpatialLab\Appp\Router (static/regExBased etc.)
     * @return void
     */
    private function route(): void
    {   
        $uri = new StringClass($this->request->getUri());

        if($uri->contains('?')) {
            $uri->replace('?' . $this->request->getQueryString(), '');
        }

        $tmp = ($uri)->splitBy('/')->trim();
        switch(count($tmp)) {
            case 0:
                $this->controllerName = new StringClass(Main::INDEX_CTLR);
                $this->actionName = new StringClass(Main::DEFAULT_ACTN);
                break;

            case 1:
                case 0:
                    $this->controllerName = (new StringClass(Main::INDEX_CTLR))->append(Main::CTLR_SUFFIX);
                    $this->actionName = (new StringClass($tmp->pop()))->lower()->append(Main::ACTN_SUFFIX);
                    break;

             default:  
             $this->controllerName = (new StringClass($tmp->shift()))->lower()->upperFirst()->append(Main::CTLR_SUFFIX);
             $this->actionName = (new StringClass($tmp->shift()))->lower()->append(Main::ACTN_SUFFIX);
             $this->parseParams($tmp);
        }
    }

    private function parseParams(ListClass $params): void
    {
        $this->params = new ListClass();
        if(count($params) % 2 !== 0) {
            $this->params[$params->pop()] = true;
        }
        
        while(count($params)) {
            $this->params[$params->shift()] = $params->shift();
        }

        if(count($_REQUEST)) {
            $this->params->merge($_REQUEST);
        }
    }

    public function dispatch()
    {
        //->$ctrl->$action($params)
        $ctrlName = Main::ACTN_CTLR_NS . (string) $this->getControllerName();
        $currentCrlr = new $ctrlName($this);
        $action = (string) $this->getActionName();
        $currentCrlr->$action();
    }

    /**
     * Get the value of params
     *
     * @return ListClass
     */
    public function getParams(): ListClass
    {
        return $this->params;
    }

    /**
     * Set the value of params
     *
     * @param ListClass $params
     *
     * @return self
     */
    public function setParams(ListClass $params): self
    {
        $this->params = $params;

        return $this;
    }

    /**
     * Get the value of controllerName
     *
     * @return StringClass
     */
    public function getControllerName(): StringClass
    {
        return $this->controllerName;
    }

    /**
     * Set the value of controllerName
     *
     * @param StringClass $controllerName
     *
     * @return self
     */
    public function setControllerName(StringClass $controllerName): self
    {
        $this->controllerName = $controllerName;

        return $this;
    }

    /**
     * Get the value of actionName
     *
     * @return StringClass
     */
    public function getActionName(): StringClass
    {
        return $this->actionName;
    }

    /**
     * Set the value of actionName
     *
     * @param StringClass $actionName
     *
     * @return self
     */
    public function setActionName(StringClass $actionName): self
    {
        $this->actionName = $actionName;

        return $this;
    }

    /**
     * Get the value of request
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * Set the value of request
     */
    public function setRequest($request): self
    {
        $this->request = $request;

        return $this;
    }

    /**
     * Get the value of response
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * Set the value of response
     */
    public function setResponse($response): self
    {
        $this->response = $response;

        return $this;
    }
}