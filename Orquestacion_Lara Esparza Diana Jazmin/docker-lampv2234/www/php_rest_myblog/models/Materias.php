<?php 
  class Materias {
    // DB stuff
    private $conn;
    private $table = 'materias';

    // Materias Properties
    public $clave_materia;
    public $nombre_materia;
    public $semestre;
    public $creditos;

    // Constructor with DB
    public function __construct($db) {
      $this->conn = $db;
    }

    // Get Materias
    public function read() {
      // Create query
      $query = 'SELECT *  FROM ' . $this->table;
      
      // Prepare statement
      $stmt = $this->conn->prepare($query);

      // Execute query
      $stmt->execute();

      return $stmt;
    }

    // Get Single Materia
    public function read_single() {
          // Create query
          $query = 'SELECT * FROM ' . $this->table . 'WHERE clave_materia = ?';

          // Prepare statement
          $stmt = $this->conn->prepare($query);

          // Bind clave_materia
          $stmt->bindParam(1, $this->clave_materia);

          // Execute query
          $stmt->execute();

          $row = $stmt->fetch(PDO::FETCH_ASSOC);

          // Set properties
          $this->nombre_materia = $row['nombre_materia'];
          $this->semestre = $row['semestre'];
          $this->creditos = $row['creditos'];
    }

    // Create Post
    public function create() {
          // Create query
          $query = 'INSERT INTO ' . $this->table . ' SET clave_materia = :clave_materia, nombre_materia = :nombre_materia, semestre = :semestre, creditos = :creditos';

          // Prepare statement
          $stmt = $this->conn->prepare($query);

          // Clean data
          $this->clave_materia = htmlspecialchars(strip_tags($this->clave_materia));
          $this->nombre_materia = htmlspecialchars(strip_tags($this->nombre_materia));
          $this->semestre = htmlspecialchars(strip_tags($this->semestre));
          $this->creditos = htmlspecialchars(strip_tags($this->creditos));

          // Bind data
          $stmt->bindParam(':clave_materia', $this->clave_materia);
          $stmt->bindParam(':nombre_materia', $this->nombre_materia);
          $stmt->bindParam(':semestre', $this->semestre);
          $stmt->bindParam(':creditos', $this->creditos);

          // Execute query
          if($stmt->execute()) {
            return true;
          }

      // Print error if something goes wrong
      printf("Error: %s.\n", $stmt->error);

      return false;
    }

    // Update Post
    public function update() {
          // Create query
          $query = 'UPDATE ' . $this->table . '
                                SET nombre_materia = :nombre_materia, semestre = :semestre, creditos = :creditos
                                WHERE clave_materia = :clave_materia';

          // Prepare statement
          $stmt = $this->conn->prepare($query);

          // Clean data
          $this->nombre_materia = htmlspecialchars(strip_tags($this->nombre_materia));
          $this->semestre = htmlspecialchars(strip_tags($this->semestre));
          $this->creditos = htmlspecialchars(strip_tags($this->creditos));
          $this->clave_materia = htmlspecialchars(strip_tags($this->clave_materia));

          // Bind data
          $stmt->bindValue(':nombre_materia', $this->nombre_materia);
          $stmt->bindValue(':semestre', $this->semestre);
          $stmt->bindValue(':creditos', $this->creditos);
          $stmt->bindValue(':clave_materia', $this->clave_materia);

          // Execute query
          if($stmt->execute()) {
            return true;
          }

          // Print error if something goes wrong
          printf("Error: %s.\n", $stmt->error);

          return false;
    }

    // Delete Post
    public function delete() {
          // Create query
          $query = 'DELETE FROM ' . $this->table . ' WHERE clave_materia = :clave_materia';

          // Prepare statement
          $stmt = $this->conn->prepare($query);

          // Clean data
          $this->clave_materia = htmlspecialchars(strip_tags($this->clave_materia));

          // Bind data
          $stmt->bindParam(':clave_materia', $this->clave_materia);

          // Execute query
          if($stmt->execute()) {
            return true;
          }

          // Print error if something goes wrong
          printf("Error: %s.\n", $stmt->error);

          return false;
    }
    
  }