import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-snake-game',
  templateUrl: './snake-game.component.html',
  styleUrls: ['./snake-game.component.css']
})
export class SnakeGameComponent implements OnInit {
  // Variables para el juego
  snake = [{x: 0, y: 0}];
  apple = {x: 5, y: 5};
  direction = 'right';

  ngOnInit() {
    setInterval(this.gameLoop, 100);
  }

  gameLoop = () => {
    const head = Object.assign({}, this.snake[0]); // copia de la cabeza
  
    // Verificar la dirección actual y mover la cabeza en consecuencia
    switch (this.direction) {
      case 'up':
        head.y--;
        break;
      case 'down':
        head.y++;
        break;
      case 'left':
        head.x--;
        break;
      case 'right':
        head.x++;
        break;
    }
  
    // Mover el resto del cuerpo de la serpiente
    for (let i = this.snake.length - 1; i > 0; i--) {
      this.snake[i] = Object.assign({}, this.snake[i - 1]);
    }
  
    // Actualizar la posición de la cabeza
    this.snake[0] = head;
  
    // Resto del código
  }
  

  setDirection = (event: KeyboardEvent) => {
    switch (event.key) {
      case 'ArrowUp':
        this.direction = 'up';
        break;
      case 'ArrowDown':
        this.direction = 'down';
        break;
      case 'ArrowLeft':
        this.direction = 'left';
        break;
      case 'ArrowRight':
        this.direction = 'right';
        break;
    }
  }

  
}
