<?php
class Crud {
    private $conexion;
    private $host = "localhost";
    private $user = "root";
    private $pass = "1201";
    private $bd = "empresa";

    public function __construct()
    {
        $this->conexion = new PDO("mysql:host=$this->host;dbname=$this->bd",$this->user, $this->pass);
    }

    public function read()
    {
        $query = "SELECT * FROM personal";
        $stmt = $this->conexion->prepare($query);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        unset($this->conexion);
        return $result;
    }

    public function create($datos_contacto) {
        $query = "INSERT INTO personal(id, nombre, apellido, telefono, correo, departamento_id) VALUES (:id, :nombre, :apellido, :telefono, :correo, :departamento_id)";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(":id", $datos_contacto["id"]);
        $stmt->bindParam(":nombre", $datos_contacto["nombre"]);
        $stmt->bindParam(":apellido", $datos_contacto["apellido"]);
        $stmt->bindParam(":telefono", $datos_contacto["telefono"]);
        $stmt->bindParam(":correo", $datos_contacto["correo"]);
        $stmt->bindParam(":departamento_id", $datos_contacto["departamento_id"]);
        $stmt->execute();

        unset($this->conexion);
        return json_encode($stmt);
    }

    public function update($datos_contacto) {
        $query = "UPDATE personal SET nombre = :nombre, apellido = :apellido, telefono = :telefono, correo = :correo, departamento_id = :departamento_id WHERE id = :id";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(":id", $datos_contacto["id"]);
        $stmt->bindParam(":nombre", $datos_contacto["nombre"]);
        $stmt->bindParam(":apellido", $datos_contacto["apellido"]);
        $stmt->bindParam(":telefono", $datos_contacto["telefono"]);
        $stmt->bindParam(":correo", $datos_contacto["correo"]);
        $stmt->bindParam(":departamento_id", $datos_contacto["departamento_id"]);
        $stmt->execute();

        unset($this->conexion);
        return $stmt;
    }

    public function delete($id_contacto) {
        $query = "DELETE FROM personal WHERE id = :id";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(":id", $id_contacto);
        $stmt->execute();

        unset($this->conexion);
        return $stmt;
    }

    public function show($id_contacto) {
        $query = "SELECT * FROM personal WHERE id = :id";
        $stmt = $this->conexion->prepare($query);
        $stmt->bindParam(":id", $id_contacto);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        unset($this->conexion);
        return $result;
    }
}

?>