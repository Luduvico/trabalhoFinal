<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property integer $id
 * @property string $login
 * @property string $senha
 * @property string $nome
 * @property string $email
 * @property string $pagina
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'login', 'senha', 'nome', 'email'], 'required', 'message'=>'Este campo é obrigatório'],
            ['senha', 'match', 'pattern'=>'/^[a-z0-9_-]{6,20}$/', 'message'=>'A senha deve ter entre 6 e 20 caracteres contendo letras e/ou numeros'],
            [['id'], 'integer'],
            ['email', 'email', 'message'=>'Este não é um endereço de email válido'],
            [['login'], 'string', 'max' => 20],
            [['senha'], 'string', 'max' => 128],
            [['nome', 'pagina'], 'string', 'max' => 200],
            [['email'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'login' => 'Login',
            'senha' => 'Senha',
            'nome' => 'Nome',
            'email' => 'Email',
            'pagina' => 'Pagina',
        ];
    }
}
