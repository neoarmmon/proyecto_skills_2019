import { Component } from '@angular/core';
import { Juegos } from '../juegos';

@Component({
  selector: 'app-inicio',
  templateUrl: './inicio.component.html',
  styleUrls: ['./inicio.component.css']
})
export class InicioComponent {
  juegos: Juegos[] = [
    { 
      id:1,
      nombre:"El titan dormido",
      descripcion:"Novela interactiva" 
    },
    { 
      id:2,
      nombre:"El cuevas",
      descripcion:"El cuevas desnudo-game" 
    },
    { 
      id:3,
      nombre:"SinfusMaximus",
      descripcion:"Evita que te chupe todo" 
    }
  ]; // Aquí almacenaremos las películas

  constructor() { }

  juegosFiltrados: Juegos[] = this.juegos; // Aquí almacenaremos los juegos filtrados
  filtrar: string = '';

  buscar() {
    // Si no se ingresa ningún término de búsqueda, mostrar todos los juegos
    if (!this.filtrar.trim()) {
      this.juegosFiltrados = this.juegos;
    } else {
      // Filtrar los juegos por nombre
      this.juegosFiltrados = this.juegos.filter(juego =>
        juego.nombre.toLowerCase().includes(this.filtrar.toLowerCase())
      );
    }
  }
}
