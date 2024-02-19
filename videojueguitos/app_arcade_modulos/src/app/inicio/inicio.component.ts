import { Component } from '@angular/core';

@Component({
  selector: 'app-inicio',
  templateUrl: './inicio.component.html',
  styleUrls: ['./inicio.component.css']
})
export class InicioComponent {
  peliculas: any[] = []; // Aquí almacenaremos las películas

  constructor() { }

  buscar() {
    // Lógica para buscar películas (puedes hacer una solicitud a un API aquí)
    // Por ahora, simplemente simulamos algunos datos de películas
    this.peliculas = [
      { title: 'Película 1' },
      { title: 'Película 2' },
      { title: 'Película 3' }
    ];
  }
}
