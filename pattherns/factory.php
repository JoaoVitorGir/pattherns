<?php
interface Forma {
    public function desenhar();
}

class Circulo implements Forma {
    public function desenhar() {
        return 
        ' <div style="display:flex; justify-content:center; align-items:center; height: 50vh; flex-direction:column">
            <span> Desenhando um círculo</span> 
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-0-circle" viewBox="0 0 16 16">
                <path d="M7.988 12.158c-1.851 0-2.941-1.57-2.941-3.99V7.84c0-2.408 1.101-3.996 2.965-3.996 1.857 0 2.935 1.57 2.935 3.996v.328c0 2.408-1.101 3.99-2.959 3.99ZM8 4.951c-1.008 0-1.629 1.09-1.629 2.895v.31c0 1.81.627 2.895 1.629 2.895s1.623-1.09 1.623-2.895v-.31c0-1.8-.621-2.895-1.623-2.895Z"/>
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M1 8a7 7 0 1 0 14 0A7 7 0 0 0 1 8"/>
            </svg>
        </div>
        '
        ;
    }
}

class Quadrado implements Forma {
    public function desenhar() {
        return
        ' <div style="display:flex; justify-content:center; align-items:center; height: 50vh; flex-direction:column">
            <span> Desenhando um quadrado</span> 
            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-0-square" viewBox="0 0 16 16">
                <path d="M7.988 12.158c-1.851 0-2.941-1.57-2.941-3.99V7.84c0-2.408 1.101-3.996 2.965-3.996 1.857 0 2.935 1.57 2.935 3.996v.328c0 2.408-1.101 3.99-2.959 3.99ZM8 4.951c-1.008 0-1.629 1.09-1.629 2.895v.31c0 1.81.627 2.895 1.629 2.895s1.623-1.09 1.623-2.895v-.31c0-1.8-.621-2.895-1.623-2.895Z"/>
                <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm15 0a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1z"/>
            </svg>
        </div>
        '
        ;
    }
}

class FabricaFormas {
    public function criarForma($tipo) {
        switch ($tipo) {
            case 'circulo':
                return new Circulo();
            case 'quadrado':
                return new Quadrado();
            default:
                throw new Exception("Tipo de forma não suportado");
        }
    }
}

?>