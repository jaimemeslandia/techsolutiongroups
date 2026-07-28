<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\View\Component;

class ApiUf extends Component
{
    public $valor;
    public $fecha;
    public $error;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        #TRAE LA UF Y LA GUARDA EN CACHE
        $idCache = 'uf-del-dia-' . now()->toDateString();

        $respuestaUf = Cache::remember($idCache, now()->endOfDay(), function () {
        try {
            $consulta = Http::withoutVerifying()->timeout(5)->get('https://indicadoreconomico.cl/api/uf');

            if ($consulta->successful()) {
                return $consulta->json();
            }
        } catch (\Throwable $e) {
            // no se pudo conectar a la api
        }

        return null;
        });

        $this->valor = $respuestaUf['valor'] ?? null;
        $this->fecha = $respuestaUf['fecha'] ?? null;
        $this->error = is_null($respuestaUf);

    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.api-uf');
    }
}
