<?

class Borrow
{
  protected int $id;
  protected int $customer_id;
  protected int $book_ISBN;
  protected string $date_emprunt;
  protected int $nbjour_emprunt;

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;

    return $this;
  }

  public function getCustomer_id()
  {
    return $this->customer_id;
  }

  public function setCustomer_id($customer_id)
  {
    $this->customer_id = $customer_id;
  }

  public function getBook_ISBN()
  {
    return $this->book_ISBN;
  }

  public function setBook_ISBN($book_ISBN)
  {
    $this->book_ISBN = $book_ISBN;
  }

  public function getDate_emprunt()
  {
    return $this->date_emprunt;
  }

  public function setDate_emprunt($date_emprunt)
  {
    $this->date_emprunt = $date_emprunt;
  }

  public function getNbjour_emprunt()
  {
    return $this->nbjour_emprunt;
  }

  public function setNbjour_emprunt($nbjour_emprunt)
  {
    $this->nbjour_emprunt = $nbjour_emprunt;
  }
}
?>