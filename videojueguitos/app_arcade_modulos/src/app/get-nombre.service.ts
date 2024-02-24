import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class GetNombreService {

  private apiUrl = 'https://127.0.0.1:8000';

  constructor(private http: HttpClient) {}

  // Función para obtener el nombre de usuario
  getUsername(token: string): Observable<any> {
    return this.http.post<any>(`${this.apiUrl}/get-username`, { token });
  }
}
