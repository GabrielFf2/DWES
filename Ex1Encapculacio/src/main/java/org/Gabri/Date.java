package org.Gabri;

import java.time.LocalDate;

public class Date {
    private int year;
    private int month;
    private int day;
    private String date;
    private int diesDesdeAny0;
    public Date(int year, int month, int day, String date , int diesDesdeAny0)  {
        this.year = year;
        this.month = month;
        this.day = day;
        this.date = date;
        this.diesDesdeAny0 = diesDesdeAny0;
    }

    public int getYear1() {
        LocalDate date1 = LocalDate.of(year, month, day);
        return date1.getYear();
    }
    public int getYear2() {
        String[] datapartes = this.date.split("/");
        int dataPart = Integer.parseInt(datapartes[2]);
        return year;
    }
    public int getYear3() {
        return diesDesdeAny0/365;
    }

}
