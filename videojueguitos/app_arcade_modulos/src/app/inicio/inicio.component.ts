import { Component } from '@angular/core';
import { Juegos } from '../juegos';
import { JuegosService } from '../juegos.service';
import { DomSanitizer, SafeUrl } from '@angular/platform-browser';
import { GenerosService } from '../generos.service';
import { JuegoFiltradoService } from '../juego-filtrado.service';

@Component({
  selector: 'app-inicio',
  templateUrl: './inicio.component.html',
  styleUrls: ['./inicio.component.css']
})
export class InicioComponent {
  juegos: any[] = []; 
  generos: any[]=[];
  juegosFiltrados: any[] = this.juegos; 
  filtrar: string = '';
  generoSeleccionado: string="0";

  constructor(private juegoFiltradoService:JuegoFiltradoService,private generosService: GenerosService, private juegosService: JuegosService, private _sanitizer: DomSanitizer) {
    this.recuperar();
  }

  /**
   * Metodo que obtiene los juegos de un json y los guarda en un array local
   */
  recuperar() {
    //Recojer juegos
    this.juegosService.retornar().subscribe(response => {
      console.log(response);
      if (Array.isArray(response)) {
        console.log("Es un array");
        this.juegos=response;
        this.juegosFiltrados=this.juegos;
        console.log(this.juegos);
      } else {
        console.error('Los datos recibidos no son un array:', response);
      }
    });
    
    //Recoger Generos
    this.generosService.retornar().subscribe(response => {
      console.log(response);
      if (Array.isArray(response)) {
        console.log("Es un array");
        this.generos = response;
        console.log(this.generos);
      } else {
        console.error('Los datos recibidos no son un array:', response);
      }
    });
  }

  filtrarGenero(){
    console.log("Carlos inutil");
    if(this.generoSeleccionado=="0"){
      this.recuperar();
    }else{
      this.juegoFiltradoService.retornar(this.generoSeleccionado).subscribe(response => {
        console.log(response);
        if (Array.isArray(response)) {
          console.log("Es un array");
          this.juegos=response;
          this.juegosFiltrados=this.juegos;
          console.log(this.juegos);
        } else {
          console.error('Los datos recibidos no son un array:', response);
        }
      });
    }
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
