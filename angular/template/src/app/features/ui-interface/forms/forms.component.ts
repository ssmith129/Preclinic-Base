import { Component,HostListener} from '@angular/core';
import { RouterModule } from '@angular/router';


@HostListener('window: resize', ['$event'])
@Component({
    selector: 'app-forms',
    templateUrl: './forms.component.html',
    styleUrls: ['./forms.component.scss'],
    imports: [RouterModule],
})
export class FormsComponent  {
  public innerHeight!: number;

}
