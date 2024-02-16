import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { ElFooterComponent } from './el-footer/el-footer.component';
import { SnakeGameComponent } from './snake-game/snake-game.component';

@NgModule({
  declarations: [
    AppComponent,
    ElFooterComponent,
    SnakeGameComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
