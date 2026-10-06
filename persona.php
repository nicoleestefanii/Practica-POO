<?php

class Persona
{
    protected string $nombre;
    protected string $apellido;
    protected string $fechaNacimiento;

    public function __construct(
        string $nombre,
        string $apellido,
        string $fechaNacimiento
    )
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->fechaNacimiento = $fechaNacimiento;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getApellido()
    {
        return $this->apellido;
    }

    public function getFechaNacimiento()
    {
        return $this->fechaNacimiento;
    }
}


class Estudiante extends Persona
{
    protected string $codigoEstudiante;
    protected float $indiceAcademico;
    protected int $cohorte;
    protected int $estadoAcademico;
    protected int $modalidadEstudio;

    public function __construct(
        string $codigoEstudiante,
        float $indiceAcademico,
        int $cohorte,
        int $estadoAcademico,
        int $modalidadEstudio,
        string $nombre,
        string $apellido,
        string $fechaNacimiento
    )
    {
        parent::__construct($nombre, $apellido, $fechaNacimiento);

        $this->codigoEstudiante = $codigoEstudiante;
        $this->indiceAcademico = $indiceAcademico;
        $this->cohorte = $cohorte;
        $this->estadoAcademico = $estadoAcademico;
        $this->modalidadEstudio = $modalidadEstudio;
    }

    public function getCodigoEstudiante()
    {
        return $this->codigoEstudiante;
    }

    public function getIndiceAcademico()
    {
        return $this->indiceAcademico;
    }

    public function getCohorte()
    {
        return $this->cohorte;
    }

    public function getEstadoAcademico()
    {
        return $this->estadoAcademico;
    }

    public function getModalidadEstudio()
    {
        return $this->modalidadEstudio;
    }
}


class Docente extends Persona
{
    protected string $codigoDocente;
    protected string $departamento;
    protected string $categoria;
    protected string $tituloAcademico;
    protected string $tipoContratacion;

    public function __construct(
        string $codigoDocente,
        string $departamento,
        string $categoria,
        string $tituloAcademico,
        string $tipoContratacion,
        string $nombre,
        string $apellido,
        string $fechaNacimiento
    )
    {
        parent::__construct($nombre, $apellido, $fechaNacimiento);

        $this->codigoDocente = $codigoDocente;
        $this->departamento = $departamento;
        $this->categoria = $categoria;
        $this->tituloAcademico = $tituloAcademico;
        $this->tipoContratacion = $tipoContratacion;
    }

    public function getCodigoDocente()
    {
        return $this->codigoDocente;
    }

    public function getDepartamento()
    {
        return $this->departamento;
    }

    public function getCategoria()
    {
        return $this->categoria;
    }

    public function getTituloAcademico()
    {
        return $this->tituloAcademico;
    }

    public function getTipoContratacion()
    {
        return $this->tipoContratacion;
    }
}


// ESTUDIANTE
$estudiante = new Estudiante(
    "EST-001",
    3.5,
    2023,
    1,
    2,
    "Juan",
    "Pérez",
    "2000-05-15"
);

echo "<h2>Datos del Estudiante</h2>";
echo "Nombre: " . $estudiante->getNombre() . "<br>";
echo "Apellido: " . $estudiante->getApellido() . "<br>";
echo "Fecha de nacimiento: " . $estudiante->getFechaNacimiento() . "<br>";
echo "Código de estudiante: " . $estudiante->getCodigoEstudiante() . "<br>";
echo "Índice académico: " . $estudiante->getIndiceAcademico() . "<br>";
echo "Cohorte: " . $estudiante->getCohorte() . "<br>";
echo "Estado académico: " . $estudiante->getEstadoAcademico() . "<br>";
echo "Modalidad de estudio: " . $estudiante->getModalidadEstudio() . "<br>";


// DOCENTE
$docente = new Docente(
    "DOC-001",
    "Computación y Sistemas",
    "Titular",
    "Magíster",
    "Tiempo Completo",
    "Carlos",
    "Rodríguez",
    "1980-08-20"
);

echo "<h2>Datos del Docente</h2>";
echo "Nombre: " . $docente->getNombre() . "<br>";
echo "Apellido: " . $docente->getApellido() . "<br>";
echo "Fecha de nacimiento: " . $docente->getFechaNacimiento() . "<br>";
echo "Código de docente: " . $docente->getCodigoDocente() . "<br>";
echo "Departamento: " . $docente->getDepartamento() . "<br>";
echo "Categoría: " . $docente->getCategoria() . "<br>";
echo "Máximo título académico: " . $docente->getTituloAcademico() . "<br>";
echo "Tipo de contratación: " . $docente->getTipoContratacion() . "<br>";

?>