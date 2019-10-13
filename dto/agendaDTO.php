<?php





class AgendaDTO {
    private $clienteDTO;
    private $ServicoDTO;
    
    function getClienteDTO() {
        return $this->clienteDTO;
    }

    function getServicoDTO() {
        return $this->ServicoDTO;
    }

    function setClienteDTO($clienteDTO) {
        $this->clienteDTO = $clienteDTO;
    }

    function setServicoDTO($ServicoDTO) {
        $this->ServicoDTO = $ServicoDTO;
    }



    
}
