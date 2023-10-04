<?php
declare(strict_types=1);

namespace App\Controller;
use Cake\Datasource\ConnectionManager;

/**
 * Nome Controller
 *
 * @property \App\Model\Table\NomeTable $Nome
 * @method \App\Model\Entity\Nome[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class NomeController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $nome = $this->paginate($this->Nome);

        $this->set(compact('nome'));
    }

    /**
     * View method
     *
     * @param string|null $id Nome id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $nome = $this->Nome->get($id, [
            'contain' => ['Produto'],
        ]);

        $filtroId = $nome['id'];

        $connection = ConnectionManager::get('default');
        $somaProd = $connection
        ->execute("SELECT valor FROM produto WHERE nome_id = $filtroId GROUP BY nome_id;")
        ->fetchAll('assoc');

        if ($somaProd != null) {
            $somaValor = $somaProd['0']['valor'];
        }else {
            $somaValor = 0;
        }
        

        $this->set(compact('nome','somaValor'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $nome = $this->Nome->newEmptyEntity();
        if ($this->request->is('post')) {
            $nome = $this->Nome->patchEntity($nome, $this->request->getData());
            if ($this->Nome->save($nome)) {
                $this->Flash->success(__('The nome has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The nome could not be saved. Please, try again.'));
        }
        $this->set(compact('nome'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Nome id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $nome = $this->Nome->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $nome = $this->Nome->patchEntity($nome, $this->request->getData());
            if ($this->Nome->save($nome)) {
                $this->Flash->success(__('The nome has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The nome could not be saved. Please, try again.'));
        }
        $this->set(compact('nome'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Nome id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $nome = $this->Nome->get($id);
        if ($this->Nome->delete($nome)) {
            $this->Flash->success(__('The nome has been deleted.'));
        } else {
            $this->Flash->error(__('The nome could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
