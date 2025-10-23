import { CommonModule } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink } from '@angular/router';
import { routes } from '../../../shared/routes/routes';
import { BsDatepickerModule } from 'ngx-bootstrap/datepicker';
import { MatSelectModule } from '@angular/material/select';
import { Editor, Toolbar } from 'ngx-editor';
import { NgxEditorModule } from 'ngx-editor';

@Component({
  selector: 'app-todo',
  templateUrl: './todo.component.html',
  styleUrl: './todo.component.scss',
  imports: [CommonModule,RouterLink,BsDatepickerModule,MatSelectModule,NgxEditorModule]
})
export class TodoComponent {
routes=routes
check:boolean[]=[false];
toggleCheck(i:number){
  this.check[i]=!this.check[i];
}
editor!: Editor;
editor1!: Editor;
toolbar: Toolbar = [
  ['bold', 'italic', 'format_clear'],
  ['underline', 'strike'],
  [{ heading: ['h1', 'h2', 'h3', 'h4', 'h5', 'h6'] }],
  ['image'],
  ['link'],
];
ngOnInit(): void {
  this.editor = new Editor();
  this.editor1 = new Editor();
}
ngOnDestroy(): void {
  this.editor.destroy();
  this.editor1.destroy();
}
}
