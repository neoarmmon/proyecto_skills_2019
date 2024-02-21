import { Component, HostListener } from '@angular/core';

enum Direction {
  Up,
  Down,
  Left,
  Right
}

interface Point {
  x: number;
  y: number;
}

@Component({
  selector: 'app-snake-game',
  templateUrl: './snake-game.component.html',
  styleUrls: ['./snake-game.component.css']
})
export class SnakeGameComponent {
  readonly gridSize = 20;
  readonly tileSize = 20;
  snake: Point[] = [];
  food: Point = { x: 0, y: 0 };
  direction: Direction = Direction.Right;
  gameOver = false;
  contador=this.snake.length;
  constructor() {
    this.initGame();
  }

  initGame(): void {
    this.snake = [{ x: 10, y: 10 }];
    this.food = this.generateFood();
    this.direction = Direction.Right;
    this.gameOver = false;
    setTimeout(() => this.move(), 200);
  }

  @HostListener('document:keydown', ['$event'])
  handleKeyboardEvent(event: KeyboardEvent): void {
    switch (event.key) {
      case 'ArrowLeft':
        if (this.direction !== Direction.Down) {
          this.direction = Direction.Up;
        }
        break;
      case 'ArrowRight':
        if (this.direction !== Direction.Up) {
          this.direction = Direction.Down;
        }
        break;
      case 'ArrowUp':
        if (this.direction !== Direction.Right) {
          this.direction = Direction.Left;
        }
        break;
      case 'ArrowDown':
        if (this.direction !== Direction.Left) {
          this.direction = Direction.Right;
        }
        break;
    }
  }

  move(): void {
    if (this.gameOver) {
      return;
    }
  
    const head = { ...this.snake[0] };
    switch (this.direction) {
      case Direction.Up:
        head.y--;
        break;
      case Direction.Down:
        head.y++;
        break;
      case Direction.Left:
        head.x--;
        break;
      case Direction.Right:
        head.x++;
        break;
    }
  
    // Check if the snake eats the food
    if (head.x === this.food.x && head.y === this.food.y) {
      this.snake.unshift(head);
      this.food = this.generateFood();
    } else {
      this.snake.pop();
      this.snake.unshift(head);
    }
  
    // Check if the snake hits the wall or itself
    if (head.x < 0 || head.x >= this.gridSize || head.y < 0 || head.y >= this.gridSize ||
        this.snake.slice(1).some(segment => segment.x === head.x && segment.y === head.y)) {
      this.gameOver = true;
      return;
    }
  
    setTimeout(() => this.move(), 200);
  }
  
  generateFood(): Point {
    let food: Point;
    do {
      food = {
        x: Math.floor(Math.random() * this.gridSize),
        y: Math.floor(Math.random() * this.gridSize)
      };
    } while (this.snake.some(segment => segment.x === food.x && segment.y === food.y));
    return food;
  }
  
  isSnake(row: number, col: number): boolean {
    return this.snake.some(segment => segment.x === col && segment.y === row);
  }
  
  isFood(row: number, col: number): boolean {
    return this.food.x === col && this.food.y === row;
  }

  get gridSizeArray(): number[] {
    return Array(this.gridSize).fill(0).map((x, i) => i);
  }

  
}

