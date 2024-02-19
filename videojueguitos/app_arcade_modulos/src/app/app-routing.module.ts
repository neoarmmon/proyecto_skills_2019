import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { SnakeGameComponent } from './snake-game/snake-game.component';
import { ContactoComponent } from './contacto/contacto.component';
import { AcercadeComponent } from './acercade/acercade.component';
import { InicioComponent } from './inicio/inicio.component';

const routes: Routes = [
  { path: '', redirectTo: '/inicio', pathMatch: 'full' },
  { path: 'snakegame', component: SnakeGameComponent },
  { path: 'contacto', component: ContactoComponent },
  { path: 'inicio', component: InicioComponent },
  { path: 'acercade', component: AcercadeComponent }
  // Puedes definir más rutas aquí
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})





export class AppRoutingModule { }
