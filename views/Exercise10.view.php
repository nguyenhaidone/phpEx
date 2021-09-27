<!-- <?php echo "Bai 6" ?> -->

<div class="container">
   <h3 class="display-3">Bài 10:</h3>
    <?php
        class Person{
            private $name;
            private $dateofbirth;
            private $address;

            public function setName($name)
            {
                $this->name=$name;
            }

            public function getName()
            {
                return $this->name;
            }

            public function setDateofbirth($dateofbirth)
            {
                $this->dateofbirth=$dateofbirth;
            }

            public function getDateofbirth()
            {
                return $this->dateofbirth;
            }

            public function setAddress($address)
            {
                $this->address=$address;
            }

            public function getAddress()
            {
                return $this->address;
            }
        }
        class Student extends Person
        {
            private $class;

            public function setClass($class)
            {
                $this->class=$class;
            }

            public function getClass(){
                return $this->class;
            }
        }
        $student = new Student();
        $student->setName('Nguyen Hai Dang');
        $student->setDateofbirth('09/08/2000');
        $student->setAddress('Ha Noi');
        $student->setClass('CNTT03');
    ?>
    <h4>Họ và tên :<?php echo $student->getName();?></h4>
    <h4>Ngày sinh :<?php echo $student->getDateofbirth();?></h4>
    <h4>Địa chỉ :<?php echo $student->getAddress();?></h4>
    <h4>Lớp :<?php echo $student->getClass();?></h4>
</div>