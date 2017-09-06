class Flash {

   public function create($title, $message, $level, $key = 'flash_message')
    {
      return session()->flash($key, [
        'title'    =>   $title,
        'message'  =>   $message,
        'level'     =>  $level
        ]);
    }

    public function delete($title, $message, $level = 'warning')
    {
      return $this->create($title, $message, $level, 'flash_message_delete');
    }