<?php 

namespace Conekta;

use \Conekta\ConektaResource;

class Payout extends ConektaResource
{
  public static function find($id)
  {
    $class = get_called_class();

    return parent::_scpFind($class, $id);
  }

  public static function where($params = null)
  {
    $class = get_called_class();

    return parent::_scpWhere($class, $params);
  }

  public static function create($params = null)
  {
    $class = get_called_class();

    return parent::_scpCreate($class, $params);
  }
}
<<<<<<< HEAD
?>
=======
?>
>>>>>>> 84e64705292069b96fb8c4a25b16164e0ba1c2f9
