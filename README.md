
**Setup**
1. Get MAMP
2. Directory set at htdocs 
3. Run 'Open Host in Web Browser'

**Quick Run**

```
<?php
            <!-- assign -->
            $myvar = "This is my variable";
            $number = 5;
            $number2 = 3;
            $sum = $number + $number2;
            echo "Hello World!"; 
            echo $myvar; 
            echo $sum;

            <!-- string concatenation -->
            $name = "Jake";
            echo "Hello, " . $name;

            <!-- conditional statements  -->
            $loggedIn = true;
            if($loggedIn == true){
                echo "You are logged in";
            } else {
                echo "You are not log in";
            }
?>
```
```
<!-- Array -->

            $people = array("Alice","Bob);


            print_r($people);

            echo $people[2]

```


```
<!-- loop -->
        $people = array("Alice","Bob","Catherine");

        foreach($people as $person){
            echo $person . " ";
        }


        

        $numbers = array(5,3,7);
        $sum = 0;

        foreach($numbers as $number){
            $sum = $sum + $number;
        }

        echo $sum;

```
---

# MACS

1. Get XAMPP
2.apt update
3.apt install vim
4.vim /opt/lampp/etc/extra/httpd-xampp.conf
5.change Require local to Require all granted
```
<Directory "/opt/lampp/phpmyadmin">
  AllowOverride AuthConfig
  Require all granted
  ...
```
6. :wq
7.restart apache in service tab
8.open phpmyadmin


