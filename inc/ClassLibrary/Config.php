<?php

  namespace ClassLibrary;

  class Config {
      public static $DB_SERVER = "localhost";
      public static $DB_USER = "root";
      public static $DB_PASS = "password";
      public static $MESSIAH_DB = "messiah";

      // public static $URL = parse_url(getenv("CLEARDB_DATABASE_URL"));
      // public static $DB_SERVER = $url["host"];
      // public static $DB_USER = $url["user"];
      // public static $DB_PASS = $url["pass"];
      // public static $MESSIAH_DB = substr($url["path"],1);

      public static $GOOGLE_API_KEY = "AIzaSyAO1yjjn0KRdKhcu6eQv283Lrhi5pAXNY4"; // Place your Google API Key
  }
