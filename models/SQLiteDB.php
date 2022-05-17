<?php



   class SQLiteDB{

      private readonly SQLite3 $db;

      public function __construct(string $pathToFile)
      {
         $this->db = new SQLite3($pathToFile);
         $this->db->enableExceptions(true);
      }

      public function closeConnection() : void{

         $this->db->close();

      }

      public function getDataFromIdTour() : array {
      
         $sql = "SELECT * FROM Tour t LEFT JOIN Cost c on t.id_tour = c.id_tour";
         $result = $this->db->query($sql);
         $result_array = [];

         while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
            $result_array[] = $row;
         }

         return $result_array;
      }

      public function createArrayImageTour(int $idTour) : array{

         $sql = "SELECT i.url_img FROM Image i LEFT JOIN Tour t on i.id_tour = t.id_tour WHERE i.id_tour = $idTour";
         $result = $this->db->query($sql);
         $result_array = [];

         while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
            $result_array[] = $row;
         }

         return $result_array;
      }

      public function createArrayAdditionalTour(int $idTour) : array{

         $sql = "SELECT a.Name_additional, a.cost_Additional FROM AdditionalCost a LEFT JOIN Tour t on a.id_tour = t.id_tour WHERE a.id_tour = $idTour";
         $result = $this->db->query($sql);
         $result_array = [];

         while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
            $result_array[] = $row;
         }

         return $result_array;
      }

      public function createArrayTravelRouteTour(int $idTour) : array{

         $sql = "SELECT tr.travelRoute, tr.imgRoute FROM Travel_route tr LEFT JOIN Tour t on tr.id_tour = t.id_tour WHERE tr.id_tour = $idTour";
         $result = $this->db->query($sql);
         $result_array = [];

         while ($row = $result->fetchArray(SQLITE3_ASSOC)) {
            $result_array[] = $row;
         }

         return $result_array;
      }

      public function addDataIntoTable(string $tableName, array $data): bool|SQLite3Result {

         $columnName = join(", ", array_keys($data));
         $infoToColumn = join(", ", array_map(function ($v) {
            return ":$v";
         }, array_keys($data)));
         
         $sql = "INSERT INTO $tableName($columnName) VALUES($infoToColumn)";
         $statement = $this->db->prepare($sql);

         foreach ($data as $column=>$value) {
            $statement->bindValue(":$column", $value);
         }

         return $statement->execute();
      }

      public function deleteById(string $tableName, string $column_name, mixed $column_value): bool|SQLite3Result {

         $sql = "DELETE FROM $tableName WHERE $column_name=:$column_value";

         $statement = $this->db->prepare($sql);
         $statement->bindValue(":$column_name", $column_value);

         return $statement->execute();
      }
   }

?>