<?php
namespace GoetasWebservices\XML\SOAPReader\Soap;

use GoetasWebservices\XML\WSDLReader\Wsdl\Service\Port;
class Service
{
    /**
     *
     * @var Port
     */
    protected $port;

    protected $address;
    /**
     *
     * @var Operation[]
     */
    protected $operations = array();

    protected $style;

    protected $transport;

    public function __construct(Port $port)
    {
        $this->port = $port;
    }
    public function getPort()
    {
        return $this->port;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }

    public function getOperations()
    {
        return $this->operations;
    }

    public function getStyle()
    {
        return $this->style;
    }

    public function setStyle($style)
    {
        $this->style = $style;
        return $this;
    }

    public function getTransport()
    {
        return $this->transport;
    }

    public function setTransport($transport)
    {
        $this->transport = $transport;
        return $this;
    }
    /**
     *
     * @param string $name
     * @return \GoetasWebservices\XML\SOAPReader\Soap\Operation
     */
    public function getOperation($name)
    {
        return $this->operations[$name];
    }

    public function addOperation(Operation $operation)
    {
        $this->operations[$operation->getOperation()->getName()]=$operation;
    }

}