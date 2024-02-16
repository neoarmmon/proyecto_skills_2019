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
    switch (this.direction) {
      case 'right':
        head.x++;
        break;
      case 'left':
        head.x--;
        break;
      case 'up':
        head.y--;
        break;
      case 'down':
        head.y++;
        break;
    }
    this.snake.unshift(head);

    if (this.snake[0].x === this.apple.x && this.snake[0].y === this.apple.y) {
      this.apple.x = Math.floor(Math.random() * 10);
      this.apple.y = Math.floor(Math.random() * 10);
    } else {
      this.snake.pop();
    }
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
