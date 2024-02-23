import { Component } from '@angular/core';
import { Juegos } from '../juegos';
import { JuegosService } from '../juegos.service';
import { DomSanitizer, SafeUrl } from '@angular/platform-browser';

@Component({
  selector: 'app-inicio',
  templateUrl: './inicio.component.html',
  styleUrls: ['./inicio.component.css']
})
export class InicioComponent {
  juegos: any[] = []; 
  juegosFiltrados: any[] = this.juegos; 
  filtrar: string = '';

  constructor(private juegosService: JuegosService, private _sanitizer: DomSanitizer) {
    this.recuperar();
  }

  /**
   * Metodo que obtiene los juegos de un json y los guarda en un array local
   */
  recuperar() {
    this.juegosService.retornar().subscribe(response => {
      console.log(response);
      if (Array.isArray(response)) {
        console.log("Es un array");
        this.juegos = response.map(juego => {
          return {
            nombre: juego.nombre,
            imagen: juego.imagen,
            descripcion: juego.descripcion
          };
        });
        this.juegosFiltrados=this.juegos;
        console.log(this.juegos);
      } else {
        console.error('Los datos recibidos no son un array:', response);
      }
    });
  }

  
  
  /**
   * Metodo que Filtra los juegos a mostrar usando una variable global de string vacio
   */
  buscar() {
    if (!this.filtrar.trim()) {
      this.juegosFiltrados = this.juegos;
    } else {
      this.juegosFiltrados = this.juegos.filter(juego =>
        juego.nombre.toLowerCase().includes(this.filtrar.toLowerCase())
      );
    }
  }
}
