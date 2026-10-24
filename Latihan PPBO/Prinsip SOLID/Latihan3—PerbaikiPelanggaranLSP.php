<?php
class Vehicle {
    public function startEngine(): string { return "Mesin menyala"; }
    public function pedal(): string { return "Gas!"; }
}

    class Bicycle extends Vehicle {
        public function startEngine(): string {
             throw new \Exception("Sepeda tidak punya mesin!");
        }
}

//Kode berikut melanggar LSP. Perbaiki hirarki class-nya:
//Petunjuk: Pisahkan kemampuan "bermesin" dan "tidak bermesin".