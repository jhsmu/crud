<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Producto;

class Productos extends Component
{
    use WithPagination;

	protected $paginationTheme = 'bootstrap';
    public $selected_id, $keyWord, $nombre, $descripcion, $cantidad, $precio;
    public $updateMode = false;

    public function render()
    {
		$keyWord = '%'.$this->keyWord .'%';
        return view('livewire.productos.view', [
            'productos' => Producto::latest()
						->orWhere('nombre', 'LIKE', $keyWord)
						->orWhere('descripcion', 'LIKE', $keyWord)
						->orWhere('cantidad', 'LIKE', $keyWord)
						->orWhere('precio', 'LIKE', $keyWord)
						->paginate(10),
        ]);
    }
	
    public function cancel()
    {
        $this->resetInput();
        $this->updateMode = false;
    }
	
    private function resetInput()
    {		
		$this->nombre = null;
		$this->descripcion = null;
		$this->cantidad = null;
		$this->precio = null;
    }

    public function store()
    {
        $this->validate([
		'nombre' => 'required',
		'descripcion' => 'required',
		'cantidad' => 'required',
		'precio' => 'required',
        ]);

        Producto::create([ 
			'nombre' => $this-> nombre,
			'descripcion' => $this-> descripcion,
			'cantidad' => $this-> cantidad,
			'precio' => $this-> precio
        ]);
        
        $this->resetInput();
		$this->emit('closeModal');
		session()->flash('message', 'Producto Successfully created.');
    }

    public function edit($id)
    {
        $record = Producto::findOrFail($id);

        $this->selected_id = $id; 
		$this->nombre = $record-> nombre;
		$this->descripcion = $record-> descripcion;
		$this->cantidad = $record-> cantidad;
		$this->precio = $record-> precio;
		
        $this->updateMode = true;
    }

    public function update()
    {
        $this->validate([
		'nombre' => 'required',
		'descripcion' => 'required',
		'cantidad' => 'required',
		'precio' => 'required',
        ]);

        if ($this->selected_id) {
			$record = Producto::find($this->selected_id);
            $record->update([ 
			'nombre' => $this-> nombre,
			'descripcion' => $this-> descripcion,
			'cantidad' => $this-> cantidad,
			'precio' => $this-> precio
            ]);

            $this->resetInput();
            $this->updateMode = false;
			session()->flash('message', 'Producto Successfully updated.');
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $record = Producto::where('id', $id);
            $record->delete();
        }
    }
}
