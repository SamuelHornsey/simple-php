<?php
class Template
{
  private $template_dir = __DIR__ . '/../views';

  /**
   * Constructor
   */
  public function __construct($template_dir = null)
  {
    if ($template_dir !== null) {
      $this->template_dir = $template_dir;
    }
  }

  /**
   * Render
   */
  public function render($template, $title)
  {
    if (file_exists($this->template_dir . $template)) {
      include $this->template_dir . $template;
    } else {
      throw new Exception('no template file ' . $template_file . ' present in directory ' . $this->template_dir);
    }
  }
}
