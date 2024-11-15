package org.example.nasa_pere.model;



import jakarta.persistence.*;
import lombok.*;


@Data
@AllArgsConstructor
@NoArgsConstructor

@Entity
@Table(name="asterioides")
public class Asteroid {
    @Getter
    @Setter
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private int Id;
    private String name;
    private String absolute_magnitude;
    private int diameter_km_average;
    private boolean is_potentially_hazardous;
    private Avistaments listAvistaments;

}
