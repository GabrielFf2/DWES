package org.Gabri;

import org.Gabri.model.Persona;

public class Main {
    public static void main(String[] args) {

        System.out.println("Hello and welcome!");

        Persona gabri = new Persona("Gabri",26);

        Date diaDeLexercici = new Date(2024,9,24 ,"2024/9/24",739000);

        System.out.println(diaDeLexercici.getYear1());
        System.out.println(diaDeLexercici.getYear2());
        System.out.println(diaDeLexercici.getYear3());

    }
}