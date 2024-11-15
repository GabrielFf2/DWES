package org.example.nasa_pere.model;

import jakarta.persistence.*;
import lombok.*;


@Data
@AllArgsConstructor
@NoArgsConstructor

@Entity
@Table(name="avistaments")
public class Avistaments {
    @Getter
    @Setter
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private int id;
    private Data approach_date;
    int velocity;
    int distance;
    String orbiting_body ;


}
